<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductsController;


<<<<<<< HEAD
Route::get('/about', function(){
    return view('about');
});

Route::get('/products', function(){
    return view('products');
});

Route::get('/contact', function(){
    return view('contact');
});

Route::get('/dashboard/table', function(){
    return view('admin.dashboard');
});

Route::get('/dashboard/typography', function(){
    return view('admin.typography');
});
=======
Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/products', [ProductsController::class, 'index']);
Route::get('/productDetail', [ProductsController::class, 'detail']);
>>>>>>> 7252508be1f663d469eecdcfbdc4f1eb0a27d107
