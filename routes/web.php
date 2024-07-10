<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('auth/login');
});
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('products', ProductController::class);

Route::get('/about', function () {
    return view('about', ['title' => 'About', 'nama' => 'Taufiq Pop']);
});

Route::get('/blog', function () {
    return view('blog', ['title' => 'Blog']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});

