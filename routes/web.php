<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ProductsController;
<<<<<<< HEAD
use App\Http\Controllers\AdminController;

use Illuminate\Support\Facades\Auth;



// =======
=======

Route::get('/dashboard/table', function(){
    return view('admin.dashboard');
});

Route::get('/dashboard/typography', function(){
    return view('admin.typography');
});

>>>>>>> 75770b574d53bb8df90c3f9408740bf7dc0c00f1
Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/products', [ProductsController::class, 'index']);
Route::get('/productDetail', [ProductsController::class, 'detail']);
<<<<<<< HEAD
Route::get('/dashboard/table', [AdminController::class, 'index']);
Route::get('/dashboard/typography', [AdminController::class, 'typo']);



Route::get('/login', function(){
    return view('login');
});

//Auth::routes(['login' => false, 'register' => false]);
=======
Route::get('/program', [ProgramController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/checkout', function(){
    return view('checkout');
});
>>>>>>> 75770b574d53bb8df90c3f9408740bf7dc0c00f1
