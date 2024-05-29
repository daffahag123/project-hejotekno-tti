<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\AdminController;

use Illuminate\Support\Facades\Auth;



// =======
Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/products', [ProductsController::class, 'index']);
Route::get('/productDetail', [ProductsController::class, 'detail']);
Route::get('/dashboard/table', [AdminController::class, 'index']);
Route::get('/dashboard/typography', [AdminController::class, 'typo']);



Route::get('/login', function(){
    return view('login');
});

//Auth::routes(['login' => false, 'register' => false]);