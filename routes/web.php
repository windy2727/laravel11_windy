<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// route ke controller
Route::get('/', [HomeController::class, 'index']);
use App\Http\Controllers\SiswaController;

Route::get('/siswa', [SiswaController::class, 'index']);
