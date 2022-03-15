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

Route::delete('/post/{id}', [PostController::class,'destroy'])->name('posts.destroy');
Route::get('/post/{id}',[PostController::class,'show'])->name('posts.show');
Route::post('/post', [PostController::class, 'store'])->name('posts.store');
Route::get('/post',[ PostController::class,'index'])->name('post.index');
Route::get('/post/create', [PostController::class, 'create'])->name('post.create');

Route::get('/', function () {
    return view('welcome');
})->name('home');
