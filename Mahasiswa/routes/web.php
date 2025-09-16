<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

// Halaman utama
Route::get('/', function () {
    return view('welcome');
});

// Route resource untuk Mahasiswa
Route::resource('mahasiswa', MahasiswaController::class);
