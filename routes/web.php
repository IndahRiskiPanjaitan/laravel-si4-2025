<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// HALAMAN HOME
Route::get('/', function () {
    return view('home');
});

// HALAMAN MAHASISWA (TABEL)
Route::get('/mahasiswa', [MahasiswaController::class, 'index']);

// HALAMAN TAMBAH MAHASISWA (FORM)
Route::get('/mahasiswa/create', [MahasiswaController::class, 'create']);

// HALAMAN PROFILE
Route::get('/profile', function () {
    return view('profile');
});

// HALAMAN ABOUT
Route::get('/about', function () {
    return view('about');
});
