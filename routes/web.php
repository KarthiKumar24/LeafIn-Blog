<?php


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\BlogController;
// returns the home page with all posts
// Route::get('/', PostController::class . '@index')->name('posts.index');
// Route::get('/posts/create', PostController::class . '@create')->name('posts.create');
// // adds a post to the database
// Route::post('/posts', PostController::class . '@store')->name('posts.store');
// // returns a page that shows a full post
// Route::get('/posts/{post}', PostController::class . '@show')->name('posts.show');
// // returns the form for editing a post
// Route::get('/posts/{post}/edit', PostController::class . '@edit')->name('posts.edit');
// // updates a post
// Route::put('/posts/{post}', PostController::class . '@update')->name('posts.update');
// // deletes a post
// Route::delete('/posts/{post}', PostController::class . '@destroy')->name('posts.destroy');

// Blog
// routes/web.php
// use App\Http\Controllers\BlogController;
Route::get('/', PostController::class . '@index')->name('posts.index');
Route::get('/contact', PostController::class . '@contact')->name('posts.contact');
Route::get('/blogs', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blogs/create', [BlogController::class, 'create'])->name('posts.create');
Route::post('/blogs', [BlogController::class, 'store'])->name('posts.store');
Route::get('/blogs/{id}/edit', [BlogController::class, 'edit'])->name('posts.edit');
Route::put('/blogs/{id}', [BlogController::class, 'update'])->name('posts.update');
Route::delete('/blogs/{id}', [BlogController::class, 'destroy'])->name('posts.destroy');


// Route::get('/', function () {
//     return view('blog');
// });

// Route::resource('blog', BlogController::class);

require __DIR__ . '/auth.php';
