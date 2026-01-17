<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SekolahController;


// Basic Route
Route::get('/hello', function () {
    return 'Selamat Datang di Praktik Laravel 12!';
});

// Route dengan Parameter (Required)
Route::get('/user/{id}', function ($id) {
    return 'Profil Pengguna dengan ID: ' . $id;
});

// Route dengan Parameter Opsional
Route::get('/kategori/{slug?}', function ($slug = 'umum') {
    return 'Menampilkan Artikel Kategori: ' . $slug;
});

// Named Route
Route::get('/dashboard/statistik/pengunjung', function () {
    return 'Halaman Statistik Pengunjung';
})->name('admin.statistik');

// Redirect Route
Route::redirect('/tentang-kami', '/about');

Route::get('/about', function () {
    return 'Ini adalah Halaman Tentang Kami yang baru';
});

// Route menggunakan Controller
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');
Route::get('/about-me', [PostController::class, 'about'])->name('posts.about');
Route::get('/profil/{id}', [SekolahController::class, 'show']);
