<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    public function dashboard()
    {
        $totalTransactions = \App\Models\Transaction::count();
        $totalFotografer = \App\Models\User::where('role', 'fotografer')->count();
        
        return view('superadmin.dashboard', compact('totalTransactions', 'totalFotografer'));
    }

    public function approveWithdrawal(Request $request, $id)
    {
        $withdrawal = \App\Models\Withdrawal::findOrFail($id);
        $withdrawal->update(['status' => 'success']);

        return back()->with('success', 'Withdrawal approved.');
    }

    public function verifyFotografer(Request $request, $id)
    {
        $user = \App\Models\User::where('role', 'fotografer')->findOrFail($id);
        $user->update(['is_verified' => true]);

        return back()->with('success', 'Fotografer verified.');
    }
}
