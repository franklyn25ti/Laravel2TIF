<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuestionController;

// 1. Route Halaman Utama & Form Pertanyaan
Route::get('/', function () {
    return view('home');
})->name('question.create');

// 2. Route Simpan Form (POST)
Route::post('/question/store', [QuestionController::class, 'store'])
    ->name('question.store');

// 3. Route Halaman Respon (GET)
Route::get('/question/respon', [QuestionController::class, 'respon'])
    ->name('question.respon');

// 4. Route Posts
Route::get('/posts/create', [PostController::class, 'create'])
    ->name('posts.create');

Route::post('/posts', [PostController::class, 'store'])
    ->name('posts.store');

// 5. Route Home tambahan
Route::get('/home', [HomeController::class, 'index']);