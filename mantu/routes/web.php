<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('template');
});

/**
 * HTTP Method :
 * 1. Get: digunakan menampilkan sesuatu
 * 2. post: untuk menambahkan data
 * 3. Put: untuk mengubah data
 * 4. Delete: untuk menghapus data
 */

// Route untuk menampilkan halaman data tugas
Route::get('tasks', [TaskController::class, 'index']);
Route::get('/tasks/{id}', [TaskController::class, 'show'])->name('tasks.show');