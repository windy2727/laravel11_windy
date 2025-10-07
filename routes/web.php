<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// route ke controller
Route::get('/', [HomeController::class, 'index']);
