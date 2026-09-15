<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\FotograferController;
use App\Http\Controllers\PembeliController;
use App\Http\Controllers\MarketplaceController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/p/{photo}', [MarketplaceController::class, 'show'])->name('marketplace.show');
Route::middleware('auth')->group(function () {
    Route::get('/p/{photo}/checkout', [MarketplaceController::class, 'checkout'])->name('marketplace.checkout');
});

Route::get('/photographers', function () {
    return view('photographers.index');
})->name('photographers.index');

Route::get('/photographers/{id}', function ($id) {
    return view('photographers.show', compact('id'));
})->name('photographers.show');

Route::get('/dashboard', function () {
    $role = request()->user()->role;
    if ($role === 'superadmin') {
        return redirect()->route('superadmin.dashboard');
    } elseif ($role === 'fotografer') {
        return redirect()->route('fotografer.dashboard');
    }
    return redirect()->route('pembeli.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'role:superadmin'])->prefix('superadmin')->name('superadmin.')->group(function () {
    Route::get('/dashboard', [SuperAdminController::class, 'dashboard'])->name('dashboard');
    Route::post('/withdrawals/{id}/approve', [SuperAdminController::class, 'approveWithdrawal'])->name('withdrawals.approve');
    Route::post('/fotografer/{id}/verify', [SuperAdminController::class, 'verifyFotografer'])->name('fotografer.verify');
    
    Route::get('/compliance', [SuperAdminController::class, 'compliance'])->name('compliance');
    Route::get('/orders', [SuperAdminController::class, 'ledger'])->name('orders');
    Route::get('/earnings', [SuperAdminController::class, 'withdrawal'])->name('earnings');
    Route::get('/storage', [SuperAdminController::class, 'storage'])->name('storage');
    Route::get('/settings', [SuperAdminController::class, 'settings'])->name('settings');
});

Route::middleware(['auth', 'role:fotografer'])->prefix('fotografer')->name('fotografer.')->group(function () {
    Route::get('/dashboard', [FotograferController::class, 'dashboard'])->name('dashboard');
    Route::post('/radar/toggle', [FotograferController::class, 'toggleRadar'])->name('radar.toggle');
    Route::resource('events', \App\Http\Controllers\EventController::class);
    Route::resource('photos', \App\Http\Controllers\PhotoController::class);
    Route::post('/withdrawals', [FotograferController::class, 'withdraw'])->name('withdrawals.store');
    
    // Stubbed routes for missing menus
    Route::get('/orders', [FotograferController::class, 'orders'])->name('orders');
    Route::get('/earnings', [FotograferController::class, 'earnings'])->name('earnings');
    Route::get('/storage', [FotograferController::class, 'storage'])->name('storage');
    Route::get('/portfolio', [FotograferController::class, 'portfolio'])->name('portfolio');
});

Route::middleware(['auth', 'role:pembeli'])->prefix('pembeli')->name('pembeli.')->group(function () {
    Route::get('/dashboard', [PembeliController::class, 'dashboard'])->name('dashboard');
    Route::get('/search', [PembeliController::class, 'search'])->name('search');
    Route::post('/checkout', [PembeliController::class, 'checkout'])->name('checkout');
    Route::get('/library', [PembeliController::class, 'library'])->name('library');
    Route::get('/invoice/{transaction}', [PembeliController::class, 'invoice'])->name('invoice');
    
    // Stubbed routes for missing menus
    Route::get('/favorites', [PembeliController::class, 'favorites'])->name('favorites');
    Route::get('/transactions', [PembeliController::class, 'transactions'])->name('transactions');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
