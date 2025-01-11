<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\TransactionDetailController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// ==========================================
// Public Routes
// ==========================================

// Halaman Utama
Route::get('/', function () {
    return view('welcome');
});

// Halaman Dashboard (Hanya untuk pengguna yang terautentikasi dan terverifikasi)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Rute untuk Registrasi
Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/');
})->name('logout');


// ==========================================
// Authenticated Routes
// ==========================================
Route::middleware('auth')->group(function () {
    // Profil Pengguna
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Resource Controller
    Route::resource('branches', BranchController::class);
    Route::resource('employees', EmployeeController::class);
    Route::resource('products', ProductController::class);
    Route::resource('transactions', TransactionController::class);
    Route::resource('transaction-details', TransactionDetailController::class);
    Route::get('/transactions/print-pdf', [TransactionController::class, 'printPdf'])->name('transactions.printPdf');

});

// ==========================================
// Laravel Authentication Routes
// ==========================================
require __DIR__.'/auth.php';
