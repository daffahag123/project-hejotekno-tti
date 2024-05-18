<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

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