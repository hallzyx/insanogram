<?php

use App\Http\Controllers\CreatePostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/login', function(){
//     return view('auth.login');
// });


Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,'store'])->name('login');

Route::post('/logout',[LogoutController::class,'store'])->name('logout');


Route::get('/register',[RegisterController::class,'index'])->name('register');
Route::post('/register',[RegisterController::class,'store'])->name('register');


Route::get('/muro',[PostController::class,'index'])->name('post.index');

Route::get('/createpost',[CreatePostController::class,'index'])->name('post.create');
Route::post('/createpost', [CreatePostController::class, 'store'])->name('post.create');


Route::get('/{user:name}', [UserController::class,'index'])->name('profile');


