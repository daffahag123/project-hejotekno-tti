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
Route::post('/contact/message', [ContactController::class, 'store'])->name('kirim.pesan');



// Authentication routes
Route::get('/admin/loginAdmin', [OtentikasiController::class, 'index']);
Route::post('/login/auth', [OtentikasiController::class, 'login'])->name('login.auth');
Route::get('/logout', [OtentikasiController::class, 'logout'])->name('logout');


// Authentication routes
Route::get('/loginUser', [OtentikasiController::class, 'index2'])->name('login.user');
Route::post('/Auth/User', [OtentikasiController::class, 'login2'])->name('auth.user');
Route::get('/logoutUser', [OtentikasiController::class, 'logout2'])->name('logout.user');
Route::get('/signup', [OtentikasiController::class, 'showSignupForm'])->name('showSignupForm');
Route::post('/signup', [CustomerController::class, 'signup'])->name('signup');

       
// Admin routes with middleware
Route::group(['middleware' => \App\Http\Middleware\CekLoginMiddleware::class], function () {
    Route::get('/dashboard/table', [AdminController::class, 'index'])->name('admin');
    Route::get('/dashboard/tUser', [AdminController::class, 'tUser'])->name('table.user');
    Route::get('/dashboard/tTransaction', [AdminController::class, 'tTransaction'])->name('table.transaction');
    Route::get('/dashboard/tMessages', [AdminController::class, 'tMessages'])->name('table.messages');
    Route::get('/dashboard/typography', [AdminController::class, 'typo'])->name('typo');
    Route::delete('/delete/produk/{id}', [OtentikasiController::class, 'deleteProduct'])->name('destroy.product');
    // Product routes
    Route::resource('product', ProductsController::class, );
    Route::delete('/delete-transaction/{id}',[OtentikasiController::class, 'deleteTransaction'])->name('deleteTransaction');
    Route::delete('/delete-message/{id}',[OtentikasiController::class, 'deleteMessage'])->name('deleteMessage');
    Route::delete('/user/{id}', [OtentikasiController::class, 'deleteUser'])->name('user.delete');

    Route::put('/updateTransaction/{id}', [AdminController::class, 'updateTransaction'])->name('updateTransaction');
    Route::post('/make/user', [CustomerController::class, 'store'])->name('user.store');
    Route::put('/update/user/{id}', [CustomerController::class, 'update'])->name('user.update');



});

Route::group(['middleware' => \App\Http\Middleware\CekLoginUser::class], function () {
    Route::get('/checkout', [CustomerController::class, 'checkout'])->name('checkout');
    Route::post('/transaksi', [CustomerController::class, 'transaksi'])->name('customer.transaksi');
    Route::get('/history', [CustomerController::class, 'history'])->name('history');
    // add cart product
    Route::post('/addcart2', [CustomerController::class, 'addcart2'])->name('addcart2');
    Route::post('/deccart', [CustomerController::class, 'deccart'])->name('deccart');
    
});
Route::post('/addcart', [CustomerController::class, 'addcart'])->name('addcart');