<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

// route halaman utama
Route::get('/', function () {
    return view('welcome');
});

// route resource untuk mahasiswa (CRUD)
Route::resource('mahasiswa', MahasiswaController::class);
