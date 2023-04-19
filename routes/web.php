<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




Route::get('/welcome/{name}', function ($name) {
    return 'hello ' . $name;
});


//post
//Route::get('/post', [App\Http\Controllers\PostsController::class, 'create'])->name('post.create');
Route::get('/post/create', [App\Http\Controllers\PostsController::class, 'create'])->name('home');
Route::get('/post/post_show/{post}', [App\Http\Controllers\PostsController::class, 'index'])->name('index');
Route::get('/post/{post}/edit', [App\Http\Controllers\PostsController::class, 'edit'])->name('post.edit');
Route::patch('/post/{post}', [App\Http\Controllers\PostsController::class, 'update'])->name('post.update');




//Profile
//Route::resource('profile', 'ProfilesController');
Route::get('/profile/{user}', [App\Http\Controllers\ProfilesController::class, 'index'])->name('name');
Route::get('/profile/{user}/edit', [App\Http\Controllers\ProfilesController::class, 'edit'])->name('name');
Route::patch('/profile/{user}', [App\Http\Controllers\ProfilesController::class, 'update'])->name('name');




//test
Route::get('/test/{user_id}', [App\Http\Controllers\TestsController::class, 'index'])->name('name');