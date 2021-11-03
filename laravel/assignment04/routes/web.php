<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\API\Post\PostAPIController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/posts', [PostController::class, 'index'])->name('index');
Route::post('/posts', [PostController::class, 'store'])->name('post.save');
Route::get('/posts/create', [PostController::class, 'create'])->name('post.create');
Route::get('/posts/edit/{post}', [PostController::class, 'edit'])->name('post.edit');
Route::put('/posts/{post}', [PostController::class, 'update'])->name('post.update');
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('post.destroy');
Route::get('/posts/searchColumn', [PostController::class, 'searchByColumn'])->name('posts.searchColumn');
Route::get('/posts/searchDate', [PostController::class, 'searchByDate'])->name('posts.searchDate');

Route::get('/users', [UserController::class, 'index'])->name('user.index');
Route::post('/users', [UserController::class, 'store'])->name('user.save');
Route::get('/users/create', [UserController::class, 'create'])->name('user.create');
Route::get('/users/edit/{user}', [UserController::class, 'edit'])->name('user.edit');
Route::put('/users/{user}', [UserController::class, 'update'])->name('user.update');
Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('user.destroy');


Route::get('/api-view', function () {
    return view('API.index');
});

Route::get('/api-view/post/create', function () {
    return view('API.api-create');
});

Route::get('/api-view/post/{id}/edit', function () {
    return view('API.api-edit');
});
