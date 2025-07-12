<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

// Route dashboard hanya satu, lewat controller
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::resource('pasiens', PasienController::class);
    Route::resource('dokters', DokterController::class);
    Route::resource('kunjungans', KunjunganController::class);
    Route::resource('dokter', App\Http\Controllers\DokterController::class);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
});

require __DIR__.'/auth.php';
