<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JadwalController;

Route::fallback(function () {
    return redirect()->route('beranda');
});


Route::get('/', [HomeController::class, 'index'])->name('beranda');
Route::get('/jadwal-keberangkatan', [JadwalController::class, 'index'])->name('keberangkatan');

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard');

    Route::resource('jadwal', App\Http\Controllers\Admin\JadwalController::class);
    Route::resource('rute', App\Http\Controllers\Admin\RuteController::class);
    Route::resource('pegawai', App\Http\Controllers\Admin\PegawaiController::class);
    Route::resource('user', App\Http\Controllers\Admin\UserController::class);
});
