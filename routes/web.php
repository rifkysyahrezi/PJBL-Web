<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\SessionController;



Route::get('/', function () {
    return view('index');
});
  
Route::get('/index', function () {
    return view('index');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/kategori', function () {
    return view('kategori');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/index', function () {
    return view('index');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
