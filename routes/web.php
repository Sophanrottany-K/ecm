<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductHomeController;
use App\Http\Controllers\SizeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Public Pages
|--------------------------------------------------------------------------
*/

Route::view('/', 'index')->name('index');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact-index');
Route::view('/products', 'product')->name('product-index');
Route::view('/vendor-list', 'vendor-list')->name('vendor-list-index');
Route::view('/vendor-detail', 'vendor-detail')->name('vendor-detail-index');
Route::view('/vendor', 'vendor')->name('vendor-index');

// Dynamic product detail
Route::get('/product-detail/{product}', [ProductController::class, 'show'])->name('product-detail');

/*
|--------------------------------------------------------------------------
| Homepage (After Login)
|--------------------------------------------------------------------------
*/
Route::prefix('homepage')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('homepage');

    // Dynamic product detail
    Route::get('/product-detail/{product}', [ProductHomeController::class, 'show'])->name('product-detail-homepage');

    Route::view('/order-history', 'homepage.orderHistory')->name('order-history');
    Route::view('/vendor-detail', 'homepage.vendor-detail')->name('vendor-detail-homepage');
    Route::view('/vendor', 'homepage.vendor')->name('vendor-homepage');
    Route::view('/vendor-list', 'homepage.vendor-list')->name('vendor-list-homepage');
    Route::view('/profile', 'homepage.profile')->name('profile');
    Route::view('/favorite', 'homepage.wishlist')->name('wishlist');
    Route::view('/contact', 'homepage.contact')->name('contact-homepage');
    Route::view('/cart', 'homepage.cartNcheckout')->name('cart-homepage');
});

/*
|--------------------------------------------------------------------------
| Authentication
|--------------------------------------------------------------------------
*/
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::get('/register/role', [AuthController::class, 'showRoleSelection'])->name('register.role');
Route::post('/register/step1', [AuthController::class, 'registerStep1'])->name('register.step1');
Route::post('/register/step2', [AuthController::class, 'registerStep2'])->name('register.step2');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

/*
|--------------------------------------------------------------------------
| Dashboards
|--------------------------------------------------------------------------
*/
Route::prefix('dashboard')->group(function () {
    Route::get('/admin', [AuthController::class, 'adminDashboard'])->name('dashboard.admin');
    Route::get('/seller', [AuthController::class, 'sellerDashboard'])->name('homepage.seller');
    Route::get('/customer', [AuthController::class, 'customerDashboard'])->name('homepage.customer');
});

/*
|--------------------------------------------------------------------------
| Resources
|--------------------------------------------------------------------------
*/
Route::resource('product', ProductController::class);
Route::resource('category', CategoryController::class);
Route::resource('size', SizeController::class);
Route::resource('color', ColorController::class);
Route::resource('order', OrderController::class);
Route::resource('payment', PaymentController::class);
Route::resource('transaction', TransactionController::class);
Route::resource('productHomepage', ProductHomeController::class);

/*
|--------------------------------------------------------------------------
| Cart Routes
|--------------------------------------------------------------------------
*/
// Session-based AJAX cart
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
Route::put('/cart/update/{cart_item_id}', [CartController::class, 'update'])->name('cart.update');
Route::delete('/cart/remove/{cart_item_id}', [CartController::class, 'remove'])->name('cart.remove');
