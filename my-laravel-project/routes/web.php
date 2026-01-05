<?php

use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/form', function () {
    return view('form');
});

Route::get('/table', function () {
    return view('table');
});

Route::get('/new', function () {
    return view('new');
});

