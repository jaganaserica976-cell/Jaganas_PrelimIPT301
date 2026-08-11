<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/movies', function () {
    return view('movies');
});

Route::get('/genres', function () {
    return view('genres');
});

Route::get('/reviews', function () {
    return view('reviews');
});

