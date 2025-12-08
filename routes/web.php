<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('html-form');
});

Route::get('/view2', function () {
    return view('myview2');
});