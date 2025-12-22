<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('html-form');
});

Route::get('/view2', function () {
    return view('myview2');
});

Route::get('/mycontroller', [App\Http\Controllers\MyController::class, 'index']);
Route::post('/mycontroller', [App\Http\Controllers\MyController::class, 'process']);

Route::namespace('App\Http\Controllers')->group(function () {
    Route::get('/flights', 'FlightController@index');
    Route::get('/flight/{id}', 'FlightController@update');
    Route::post('/flight', 'FlightController@store');
    Route::post('/flight/{id}', 'FlightController@update_action');
});