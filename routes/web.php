<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\OtentikasiController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;

// Home and other general routes
Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/products', [ProductsController::class, 'index']);
Route::get('/product_detail/{slug}', [ProductsController::class, 'detail']);
Route::get('/program', [ProgramController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);



// Authentication routes
Route::get('/login', [OtentikasiController::class, 'index']);
Route::post('/login/auth', [OtentikasiController::class, 'login'])->name('login.auth');
Route::get('/logout', [OtentikasiController::class, 'logout'])->name('logout');


// Authentication routes
Route::get('/loginUser', [OtentikasiController::class, 'index2'])->name('login.user');
Route::post('/Auth/User', [OtentikasiController::class, 'login2'])->name('auth.user');
Route::get('/logoutUser', [OtentikasiController::class, 'logout2'])->name('logout.user');
Route::get('/signup', [OtentikasiController::class, 'showSignupForm'])->name('showSignupForm');
Route::post('/signup', [CustomerController::class, 'signup'])->name('signup');
Route::get('/checkout', [CustomerController::class, 'checkout'])->name('checkout');

// add cart product
Route::post('/addcart', [CustomerController::class, 'addcart'])->name('addcart');
       
// Admin routes with middleware
Route::group(['middleware' => \App\Http\Middleware\CekLoginMiddleware::class], function () {
    Route::get('/dashboard/table', [AdminController::class, 'index'])->name('admin');
    Route::get('/dashboard/tUser', [AdminController::class, 'tUser'])->name('table.user');
    Route::get('/dashboard/typography', [AdminController::class, 'typo'])->name('typo');
    Route::delete('/delete/produk/{id}', [OtentikasiController::class, 'deleteProduct'])->name('destroy.product');
    // Product routes
    Route::resource('product', ProductsController::class, );
});