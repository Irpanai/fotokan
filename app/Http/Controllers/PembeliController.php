<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PembeliController extends Controller
{
    public function dashboard()
    {
        return view('pembeli.dashboard');
    }

    public function search(Request $request)
    {
        $query = $request->input('q');
        
        $photos = \App\Models\Photo::when($query, function ($q) use ($query) {
            $q->where('ai_tags', 'LIKE', "%{$query}%");
        })->get();

        return view('pembeli.search', compact('photos', 'query'));
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
            'status' => 'pending',
        ]);

        // Mock Midtrans Setup Here
        // Return simulated redirect
        return redirect()->route('pembeli.dashboard')->with('success', 'Checkout simulated. Total: ' . $totalBayar);
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
