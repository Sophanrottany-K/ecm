<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
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
