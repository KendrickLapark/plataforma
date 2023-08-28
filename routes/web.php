<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\UserController;

Route::get('/', function(){
    return view('home');
})->name('home');

Route::match(['get', 'post'] ,'/register', function(){
    return view('register');
})->name('register');

Route::get('/iniciar_sesión', function(){
    return view('login');
})->name('login');

Route::post('/store', [UserController::class , 'store']) 
    ->name('store');