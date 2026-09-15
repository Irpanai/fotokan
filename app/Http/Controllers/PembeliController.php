<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PembeliController extends Controller
{
    public function dashboard()
    {
        return view('pembeli.dashboard');
    }


    public function favorites()
    {
        $favorites = \App\Models\Photo::inRandomOrder()->limit(4)->get();
        $totalEstimasi = $favorites->sum('harga');
        return view('pembeli.favorites', compact('favorites', 'totalEstimasi'));
    }

    public function transactions()
    {
        $user = request()->user();
        $transactions = \App\Models\Transaction::where('pembeli_id', $user->id)
                            ->latest()
                            ->get();

        return view('pembeli.transactions', compact('transactions'));
    }

    public function search(Request $request)
    {
        $query = $request->input('q');
        
        $photos = \App\Models\Photo::when($query, function ($q) use ($query) {
            $q->where('ai_tags', 'LIKE', "%{$query}%");
        })->get();

        return view('pembeli.search', compact('photos', 'query'));
    }

    public function invoice(\App\Models\Transaction $transaction)
    {
        // Pastikan transaksi milik pembeli yang login
        if ($transaction->pembeli_id !== request()->user()->id) abort(403);
        return view('pembeli.invoice', compact('transaction'));
    }

    public function checkout(Request $request)
    {
        $request->validate([
            'photo_id' => 'required|exists:photos,id',
            'tip_amount' => 'nullable|integer|min:0',
        ]);

        $photo = \App\Models\Photo::findOrFail($request->photo_id);
        $user = $request->user();
        $tipAmount = $request->tip_amount ?? 0;
        $totalBayar = $photo->harga + $tipAmount;

        $transaction = \App\Models\Transaction::create([
            'pembeli_id' => $user->id,
            'photo_id' => $photo->id,
            'harga_foto' => $photo->harga,
            'tip_amount' => $tipAmount,
            'total_bayar' => $totalBayar,
            'status' => 'paid',
        ]);

        // Mock Midtrans Setup Here
        // Karena ini mock dan status langsung PAID, kita tambahkan saldo ke Fotografer
        $fotografer = $photo->fotografer;
        if ($fotografer) {
            $fotografer->increment('saldo', $photo->net_harga + $tipAmount);
        }

        // Return simulated redirect
        return redirect()->route('pembeli.library')->with('success', 'Pembayaran sebesar Rp' . number_format($totalBayar, 0, ',', '.') . ' berhasil! Foto sekarang tersedia di Library Anda.');
    }

    public function library()
    {
        $user = request()->user();
        $transactions = \App\Models\Transaction::where('pembeli_id', $user->id)
                            ->where('status', 'paid')
                            ->with('photo')
                            ->get();

        return view('pembeli.library', compact('transactions'));
    }
}
