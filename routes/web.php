<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\KunjunganController;

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

// Route register
Route::get('/register', [AuthController::class, 'registerForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

// Route login
Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

// Route logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Route dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

use App\Http\Controllers\AdminController;
// Route dashboard admin
Route::middleware('auth')->get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
