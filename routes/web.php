```php
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuestionController;

// Proses pengiriman form pertanyaan
Route::get('/home', function () {
    return view('home');
});

Route::post('/question/store', [QuestionController::class, 'store'])
    ->name('question.store');

// Halaman respon setelah form dikirim
Route::get('/question/response', function () {
    $data = session('data');

    if (!$data) {
        return redirect('/');
    }

    return view('home-question-respon', $data);
})->name('question.response');

// Halaman posts
Route::get('/posts/create', [PostController::class, 'create'])
    ->name('posts.create');

Route::post('/posts', [PostController::class, 'store'])
    ->name('posts.store');

// Halaman home
Route::get('/home', [HomeController::class, 'index']);

// Halaman utama menampilkan form yang ada di welcome.blade.php
Route::get('/', function () {
    return view('welcome');
});
