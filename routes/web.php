<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('home');
})->name('home');

Route::get('/register', function(){
    return view('register');
})->name('register');

Route::get('/iniciar_sesión', function(){
    return view('login');
})->name('login');
