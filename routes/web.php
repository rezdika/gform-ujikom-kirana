<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\AdminController;

Route::get('/', fn() => view('welcome'));
Route::post('/pesan', [PesanController::class, 'store'])->name('pesan.store');

// Admin routes (URL tersembunyi)
Route::get('/login', [AdminController::class, 'showLogin'])->name('login');
Route::post('/login', [AdminController::class, 'login']);
Route::post('/logout', [AdminController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/statistik', [AdminController::class, 'statistik'])->name('admin.statistik');
    Route::delete('/admin/pesan/{id}', [AdminController::class, 'destroy'])->name('admin.pesan.destroy');
});
