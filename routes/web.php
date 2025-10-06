<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home'); // akses di http://127.0.0.1:8000
});
