<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ProductsController;

Route::get('/dashboard/table', function(){
    return view('admin.dashboard');
});

Route::get('/dashboard/typography', function(){
    return view('admin.typography');
});

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/products', [ProductsController::class, 'index']);
Route::get('/productDetail', [ProductsController::class, 'detail']);
Route::get('/program', [ProgramController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/checkout', function(){
    return view('checkout');
});
