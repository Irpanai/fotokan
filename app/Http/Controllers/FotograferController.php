<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FotograferController extends Controller
{
    public function dashboard(Request $request)
    {
        $user = $request->user();
        
        $stats = [
            'saldo' => $user->saldo,
            'storage_terpakai' => $user->storage_terpakai_mb,
            'storage_total' => $user->package ? $user->package->kuota_storage_mb : 5000,
            'total_sales' => \App\Models\Transaction::whereHas('photo', function ($q) use ($user) {
                $q->where('fotografer_id', $user->id);
            })->where('status', 'paid')->sum('total_bayar'),
        ];

        $radar = \App\Models\FgLocation::where('fotografer_id', $user->id)->first();
        $withdrawals = \App\Models\Withdrawal::where('fotografer_id', $user->id)->latest()->take(5)->get();

        return view('fotografer.dashboard', compact('stats', 'radar', 'withdrawals'));
    }

    public function toggleRadar(Request $request)
    {
        $request->validate(['nama_spot' => 'required|string']);
        
        $user = $request->user();
        $location = \App\Models\FgLocation::updateOrCreate(
            ['fotografer_id' => $user->id],
            ['nama_spot' => $request->nama_spot, 'is_active' => true]
        );

        return back()->with('success', 'Radar activated at ' . $location->nama_spot);
    }

    public function withdraw(Request $request)
    {
        $request->validate([
            'jumlah_tarik' => 'required|integer|min:10000',
            'metode_pembayaran' => 'required|string',
            'nomor_tujuan' => 'required|string',
        ]);

        $user = $request->user();
        if ($user->saldo < $request->jumlah_tarik) {
            return back()->withErrors(['jumlah_tarik' => 'Insufficient balance.']);
        }

        \App\Models\Withdrawal::create([
            'fotografer_id' => $user->id,
            'jumlah_tarik' => $request->jumlah_tarik,
            'metode_pembayaran' => $request->metode_pembayaran,
            'nomor_tujuan' => $request->nomor_tujuan,
            'status' => 'pending',
        ]);

        $user->decrement('saldo', $request->jumlah_tarik);

        return back()->with('success', 'Withdrawal requested.');
    }

    public function orders(Request $request)
    {
        $user = $request->user();
        $transactions = \App\Models\Transaction::whereHas('photo', function ($q) use ($user) {
            $q->where('fotografer_id', $user->id);
        })->with(['photo', 'pembeli'])->latest()->get();

        return view('fotografer.orders', compact('transactions'));
    }

    public function earnings(Request $request)
    {
        $user = $request->user();
        
        $transactions = \App\Models\Transaction::whereHas('photo', function ($q) use ($user) {
            $q->where('fotografer_id', $user->id);
        })->where('status', 'paid')->latest()->get();
        
        $withdrawals = \App\Models\Withdrawal::where('fotografer_id', $user->id)
            ->latest()
            ->get();
            
        $totalEarnings = $transactions->sum(function($t) {
            return $t->photo->net_harga + $t->tip_amount;
        });

        return view('fotografer.earnings', compact('transactions', 'withdrawals', 'totalEarnings', 'user'));
    }

    public function storage(Request $request)
    {
        $user = $request->user();
        
        $events = \App\Models\Event::where('fotografer_id', $user->id)
            ->with('photos') // Load photos
            ->withCount('photos')
            ->get();
            
        $folders = $events->map(function ($event) {
            return [
                'id' => $event->id,
                'name' => $event->nama_event,
                'count' => $event->photos_count,
                'size' => ($event->photos_count * 15) . ' MB', 
                'photos' => $event->photos->map(function ($photo) {
                    return [
                        'id' => $photo->id,
                        'name' => basename($photo->file_asli),
                        'size' => '15 MB',
                        'url' => \Illuminate\Support\Facades\Storage::url($photo->file_watermark)
                    ];
                })
            ];
        });

        $package = $user->package ?? \App\Models\Package::where('nama_paket', 'Basic')->first();
        $storageTerpakai = $user->storage_terpakai_mb;
        $kuota = $package ? $package->kuota_storage_mb : 5000;
        
        return view('fotografer.storage', compact('events', 'folders', 'storageTerpakai', 'kuota', 'package'));
    }

    public function portfolio()
    {
        return view('fotografer.portfolio');
    }
}
