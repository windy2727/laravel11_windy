<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\BukuController; // ✅ tambahkan ini

Route::get('/', [HomeController::class, 'index']);
Route::get('/siswa', [SiswaController::class, 'index']);
Route::get('/buku', [BukuController::class, 'index']); // ✅ route ke buku
