<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/mahasiswa', function () {
    $npm = [123,124,125,126];
    $nama = ['indah','Laura','Bejo','Cinta'];
    $jumlah = count ($npm);
    return view('mahasiswa',compact('npm','jumlah','nama'));
});

Route::get('/profile', function () {
    $nama = 'Indah';
    return view('profile', compact('nama'));
});