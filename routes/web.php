<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GuruController;
use App\Http\Controllers\Admin\GaleriController;
use App\Http\Controllers\Admin\BeritaController;

// ===== ROUTE PUBLIK (PENGUNJUNG) =====
Route::get('/', [PublicController::class, 'beranda'])->name('beranda');
Route::get('/profil', [PublicController::class, 'profil'])->name('profil');
Route::get('/guru', [PublicController::class, 'guru'])->name('guru.public');
Route::get('/galeri', [PublicController::class, 'galeri'])->name('galeri.public');
Route::get('/berita', [PublicController::class, 'berita'])->name('berita.public');
Route::get('/berita/{berita}', [PublicController::class, 'beritaDetail'])->name('berita.detail');
Route::get('/kontak', [PublicController::class, 'kontak'])->name('kontak');

// ===== ROUTE ADMIN =====
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::middleware('auth')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::resource('guru', GuruController::class);
        Route::resource('galeri', GaleriController::class);
        Route::resource('berita', BeritaController::class);
    });
});