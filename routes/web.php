<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\DetailLayananController;
use App\Http\Controllers\ProvinsiController;
use App\Http\Controllers\KategoriMontirController;
use App\Http\Controllers\MontirController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/admin', [AdminController::class, 'index']);

    // Umkm routes
    Route::get('/layanan', function () {
        return view('layanan'); // go to umkm.blade.php
    });
    Route::get('/layanan/show', [LayananController::class, 'show'])->name('layanan.show'); // display
    Route::get('/layanan/create', [LayananController::class, 'create'])->name('layanan.create'); // add
    Route::post('/layanan/store', [LayananController::class, 'store'])->name('layanan.store');
    Route::get('/layanan/{id}/edit', [LayananController::class, 'edit'])->name('layanan.edit'); // edit
    Route::delete('/layanan/{id}', [LayananController::class, 'destroy'])->name('layanan.destroy'); // delete
    Route::get('/layanan/{id}', [LayananController::class, 'view'])->name('layanan.view'); // view

    // Kategori routes
    Route::get('/detail_layanan/create', [DetailLayananController::class, 'create'])->name('detail_layanani.create'); // add
    Route::get('/detail_layanan/show', [DetailLayananController::class, 'show'])->name('detail_layanan.show'); // display
    Route::post('/detail_layanan/store', [DetailLayananController::class, 'store'])->name('detail_layanan.store');
    Route::get('/detail_layanan/{id}/edit', [DetailLayananController::class, 'edit'])->name('detail_layanan.edit'); // edit
    Route::delete('/detail_layana/{id}', [DetailLayananController::class, 'destroy'])->name('detail_layanan.destroy'); // delete
    Route::get('/detail_layanan/{id}', [DetailLayananController::class, 'view'])->name('detail_layanan.view'); // view

    // Provinsi routes
    Route::get('/provinsi', [ProvinsiController::class, 'index'])->name('provinsi.index');
    Route::post('/provinsi/store', [ProvinsiController::class, 'store'])->name('provinsi.store');
    Route::get('/provinsi/create', [ProvinsiController::class, 'create'])->name('provinsi.create');
    Route::get('/provinsi/{id}/edit', [ProvinsiController::class, 'edit'])->name('provinsi.edit');
    Route::get('/provinsi/{id}', [ProvinsiController::class, 'show'])->name('provinsi.show');
    Route::delete('/provinsi/{id}', [ProvinsiController::class, 'destroy'])->name('provinsi.destroy');
    Route::post('/provinsi/{id}', [ProvinsiController::class, 'update'])->name('provinsi.update');
});

// Periksa routes
Route::get('/kategori_montir/show', [KategoriMontirController::class, 'show'])->name('kategori_montir.show'); // display
Route::get('/kategori_montir/create', [KategoriMontirController::class, 'create'])->name('kategori_montir.create'); // add
Route::post('/kategori_montir/store', [KategoriMontirController::class, 'store'])->name('kategori_montir.store');
Route::get('/kategori_montir/{id}/edit', [KategoriMontirController::class, 'edit'])->name('kategori_montir.edit'); // edit
Route::delete('/kategori_montir/{id}', [KategoriMontirController::class, 'destroy'])->name('kategori_montir.destroy'); // delete
Route::get('/kategori_montir/{id}', [KategoriMontirController::class, 'view'])->name('kategori_montir.view'); // view

// Additional routes
Route::get('/salam', function () {
    return "Selamat Datang Mahasiswa STTNF 2024"; // directly print
});

Route::get('/profil', function () {
    return view('profil'); // go to profil.blade.php
});

// Pembina routes
Route::get('/montir/show', [MontirController::class, 'show'])->name('montir.show'); // display
Route::get('/montir/create', [MontirController::class, 'create'])->name('montir.create'); // add
Route::post('/montir/store', [MontirController::class, 'store'])->name('montir.store');
Route::get('/montir/{id}/edit', [MontirController::class, 'edit'])->name('montir.edit'); // edit
Route::delete('/montir/{id}', [MontirController::class, 'destroy'])->name('montir.destroy'); // delete
Route::get('/montir/{id}', [MontirController::class, 'view'])->name('montir.view'); // view


require __DIR__.'/auth.php';