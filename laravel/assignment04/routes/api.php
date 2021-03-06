<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\Post\PostAPIController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

<<<<<<< HEAD
Route::get('/posts-view', [PostAPIController::class, 'index'])->name('api.index');
Route::post('/posts-view', [PostAPIController::class, 'store'])->name('api.save');
Route::get('/api/posts/create', [PostAPIController::class, 'create'])->name('api.create');
Route::get('/api/posts/edit/{post}', [PostAPIController::class, 'edit'])->name('api.edit');
Route::put('/api/posts/{post}', [PostAPIController::class, 'update'])->name('api.update');
Route::delete('/api/posts/{postId}', [PostAPIController::class, 'destroy'])->name('post.destroy');
=======
Route::get('/view-list', [PostAPIController::class, 'index']);
Route::delete('/post/delete/{id}', [PostAPIController::class, 'destroy']);
Route::post('/posts', [PostAPIController::class, 'store']);
Route::get('/posts/edit/{id}', [PostAPIController::class, 'edit']);
Route::post('/posts/{id}', [PostAPIController::class, 'update']);
>>>>>>> 3054fbd3c5abb91662eb6d86dccb74f1ff79fceb
