<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');
Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/product', function () {
    return view('product');
})->name('product');

Route::get('/vendor-list', function () {
    return view('vendor-list');
})->name('vendor-list');

Route::get('/cartNcheckout', function () {
    return view('cartNcheckout');
})->name('cartNcheckout');


Route::get('/cartNcheckout', function () {
    return view('cartNcheckout');
})->name('cartNcheckout');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::get('/homepage', function () {
    return view('homepage');
})->name('homepage');

Route::get('/product-detail', function () {
    return view('product-detail');
})->name('product-detail');

Route::get('/order-history', function () {
    return view('orderHistory');
})->name('order-history');

Route::get('/vendor-detail', function () {
    return view('vendor-detail');
})->name('vendor-detail');

Route::get('/vendor', function () {
    return view('vendor');
})->name('vendor');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/favorite', function () {
    return view('wishlist');
})->name('wishlist');
