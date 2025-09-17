<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

// Halaman utama
Route::get('/Mahasiswa', function () {
    return view('welcome'); 
});

// Route resource untuk Mahasiswa
Route::resource('mahasiswa', MahasiswaController::class);