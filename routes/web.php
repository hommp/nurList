<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;

// Home
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'show'])->name('about');
Route::get('/contact', [ContactController::class, 'show'])->name('contact');

//Auth
Route::get('/signup', [AuthController::class, 'signup'])->name('signup');
Route::post('/store-signup', [AuthController::class, 'storeSignup'])->name('storeSignup');
Route::get('/signin', [AuthController::class, 'signin'])->name('signin');
Route::post('/store-signin', [AuthController::class, 'storeSignin'])->name('storeSignin');
Route::get('/logout', function () {
    Auth::logout();
    return redirect()->to('/');
})->name('logout')->middleware('auth');

//Users
Route::get('/users', [UserController::class, 'index'])->name('users');
Route::get('/users/{user}/modal', [UserController::class, 'showModal'])->name('users.show-modal');
Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');

// Categories
Route::resource('categories', CategoryController::class);
Route::get('/categories.index', [CategoryController::class, 'index'])->name('categories');

//Posts
Route::resource('posts', PostController::class);
Route::get('/posts', [PostController::class, 'index'])->name('posts');
