<?php

use App\Http\Controllers\{
    PostController
};
use Illuminate\Support\Facades\Route;

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

Route::any('/post/search', [PostController::class, 'search'])->name('posts.search');

Route::get('/post/create', [PostController::class, 'create'])->name('post.create');

Route::put('/post/{id}/', [PostController::class, 'update'])->name('posts.update');

Route::get('post/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');

Route::delete('/post/{id}/delete', [PostController::class,'destroy'])->name('posts.destroy');

Route::get('/post/{id}/show',[PostController::class,'show'])->name('posts.show');

Route::post('/post', [PostController::class, 'store'])->name('posts.store');

Route::get('/post',[ PostController::class,'index'])->name('post.index');

Route::get('/', function () {return view('welcome');})->name('home');
    

