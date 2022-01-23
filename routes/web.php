<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('fumetti');
})->name('fumetti');

Route::get('/fumetto', function () {
    return view('fumetto');
})->name('fumetto');

