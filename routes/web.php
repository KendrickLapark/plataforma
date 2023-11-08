<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;


Route::get('/', function(){
    return view('home');
})->name('home'); 

Route::middleware(['guest'])->group(function(){
    Route::post('/login', [LoginController::class, 'doLogin'])->name('doLogin');
    Route::get('/register', [UserController::class, 'register'])->name('register');
    Route::post('/store', [UserController::class , 'store'])->name('store');
});


Route::get('/login', function(){
    return view('auth.login');
})->name('login');

Route::middleware(['auth'])->group(function(){
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/products', [ProductController::class, 'index'] )->name('products');   
    Route::get('/products/create', [ProductController::class, 'product_create'])->name('products.create');
    Route::get('/products/search', [ProductController::class, 'search'] )->name('products.search');
    Route::post('/products/store', [ProductController::class, 'product_store'])->name('product.store');
    Route::get('/product/show/{product}', [ProductController::class, 'product_show'])->name('product.show');
    Route::delete('products/delete/{product}', [ProductController::class, 'product_delete'])->name('product.delete');
});

