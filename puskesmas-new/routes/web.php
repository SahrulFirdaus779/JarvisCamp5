<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\KelurahanController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/salam', function () {
    return "Selamat Belajar Erik, Di Framework Laravel 11" ;
});

Route::get('/beranda', function () {
    return "Halaman Beranda" ;
});

Route::get('/profile', function () {
    return "Halaman Profile" ;
});


// Praktikum Laravel 2
Route::get('/dashboard', [AdminController::class, 'index'] );
Route::get('/contact', [ContactController::class, 'index'] );
Route::get('/about', [AboutController::class, 'index'] );

// Praktikum Laravel 3
Route::get('/dashboard/pasien', [PasienController::class, 'index'] );

// Tugas Menambahkan Halaman Kelurahan
Route::get('/dashboard/kelurahan', [KelurahanController::class, 'index'] );