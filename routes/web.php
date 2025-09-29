<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UtsController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Dashboard → butuh login + verified + session timeout
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified', 'session.timeout'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Logout
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

    // Products - hanya admin & owner
    Route::middleware(['role:admin,owner'])->group(function () {
        Route::get('/products', [ProductController::class, 'index'])->name('products.index'); // daftar produk
    });

    // Produk detail dengan parameter (ganjil/genap alert)
    Route::get('/product/{angka}', [ProductController::class, 'show'])->name('product.show');
});

require __DIR__.'/auth.php';

Route::prefix('uts')->group(function () {
    Route::get('/', [UtsController::class, 'index'])->name('uts.index');
    Route::get('/web', [UtsController::class, 'web'])->name('uts.web');
    Route::get('/database', [UtsController::class, 'database'])->name('uts.database');
});
