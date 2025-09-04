<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/cortez', function () {
    return view('cortez');
});

Route::get('/almoite', function () {
    return view('almoite');
});

