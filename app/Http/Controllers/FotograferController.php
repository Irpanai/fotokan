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
}
