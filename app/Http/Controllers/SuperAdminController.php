<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    public function dashboard()
    {
        $totalTransactions = \App\Models\Transaction::count();
        $totalFotografer = \App\Models\User::where('role', 'fotografer')->count();
        $totalGmv = \App\Models\Transaction::sum('total_bayar');
        $totalWithdrawal = \App\Models\Withdrawal::where('status', 'success')->sum('jumlah_tarik');
        
        // Data for charts or recent
        $recentTransactions = \App\Models\Transaction::with(['pembeli', 'photo.fotografer'])->latest()->take(5)->get();
        
        // Pending queues for dashboard
        $pendingUsers = \App\Models\User::where('role', 'fotografer')->where('is_verified', false)->latest()->take(3)->get();
        $pendingUsersCount = \App\Models\User::where('role', 'fotografer')->where('is_verified', false)->count();
        
        $pendingWithdrawals = \App\Models\Withdrawal::with('fotografer')->where('status', 'pending')->latest()->take(3)->get();
        $pendingWithdrawalsCount = \App\Models\Withdrawal::where('status', 'pending')->count();
        $pendingWithdrawalsAmount = \App\Models\Withdrawal::where('status', 'pending')->sum('jumlah_tarik');

        return view('superadmin.dashboard', compact(
            'totalTransactions', 'totalFotografer', 'totalGmv', 'totalWithdrawal', 'recentTransactions',
            'pendingUsers', 'pendingUsersCount', 'pendingWithdrawals', 'pendingWithdrawalsCount', 'pendingWithdrawalsAmount'
        ));
    }

    public function compliance()
    {
        $pendingUsers = \App\Models\User::where('role', 'fotografer')->where('is_verified', false)->latest()->paginate(10);
        return view('superadmin.compliance', compact('pendingUsers'));
    }

    public function ledger()
    {
        $transactions = \App\Models\Transaction::with(['pembeli', 'photo.fotografer', 'photo.event'])->latest()->paginate(15);
        
        $totalTransactionsCount = \App\Models\Transaction::count();
        $totalGmv = \App\Models\Transaction::sum('total_bayar');
        
        // Menghitung Hak Fotografer dan Pendapatan Platform secara manual karena tidak ada kolom di database
        $hakFotografer = 0;
        $pendapatanPlatform = 0;
        
        foreach (\App\Models\Transaction::with('photo')->get() as $trx) {
            if ($trx->photo) {
                $hakFotografer += $trx->photo->net_harga + $trx->tip_amount;
                $pendapatanPlatform += ($trx->harga_foto - $trx->photo->net_harga);
            }
        }
        
        // Mock MDR for now
        $totalMdr = 980200;

        return view('superadmin.ledger', compact('transactions', 'totalTransactionsCount', 'totalGmv', 'hakFotografer', 'pendapatanPlatform', 'totalMdr'));
    }

    public function withdrawal()
    {
        $withdrawals = \App\Models\Withdrawal::with('fotografer')->latest()->paginate(15);
        $pendingCount = \App\Models\Withdrawal::where('status', 'pending')->count();
        $pendingAmount = \App\Models\Withdrawal::where('status', 'pending')->sum('jumlah_tarik');
        
        $totalDisbursed = \App\Models\Withdrawal::where('status', 'success')->sum('jumlah_tarik');
        $successCount = \App\Models\Withdrawal::where('status', 'success')->count();
        
        $recentSuccess = \App\Models\Withdrawal::with('fotografer')->where('status', 'success')->latest()->take(3)->get();

        return view('superadmin.withdrawal', compact('withdrawals', 'pendingCount', 'pendingAmount', 'totalDisbursed', 'successCount', 'recentSuccess'));
    }

    public function storage()
    {
        $totalStorage = \App\Models\User::sum('storage_terpakai_mb');
        return view('superadmin.storage', compact('totalStorage'));
    }

    public function settings()
    {
        return view('superadmin.settings');
    }

    public function approveWithdrawal($id)
    {
        $withdrawal = \App\Models\Withdrawal::findOrFail($id);
        
        if ($withdrawal->status !== 'pending') {
            return back()->withErrors(['msg' => 'Hanya penarikan pending yang dapat disetujui.']);
        }
        
        $withdrawal->update(['status' => 'success']);
        
        return back()->with('success', 'Penarikan dana berhasil disetujui.');
    }

    public function verifyFotografer(Request $request, $id)
    {
        $user = \App\Models\User::where('role', 'fotografer')->findOrFail($id);
        $user->update(['is_verified' => true]);

        return back()->with('success', 'Fotografer verified.');
    }
}
