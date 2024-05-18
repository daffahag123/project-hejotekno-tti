<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductsController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/products', [ContactController::class, 'index']);
Route::get('/contact', [ProductsController::class, 'index']);


<<<<<<< HEAD
=======
Route::get('/products', function(){
    return view('products');
});

Route::get('/productDetail', function(){
    return view('productDetail');
});

Route::get('/contact', function(){
    return view('contact');
});
>>>>>>> 586d905c44ba878f47150675d689378324e0a5cd
