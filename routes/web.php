<?php

use App\Http\Controllers\PokedexController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PokedexsController;

Route::get('/', function () {
    return view('html-form');
});

Route::get('/view2', function () {
    return view('myview2');
});

Route::get('/mycontroller', [App\Http\Controllers\MyController::class, 'index']);
Route::post('/mycontroller', [App\Http\Controllers\MyController::class, 'process']);

Route::get('/', [App\Http\Controllers\HtmlForm_Controller::class, 'index'])->name('form.index');
Route::post('/form-data', [App\Http\Controllers\HtmlForm_Controller::class, 'store'])->name('form.store');

Route::namespace('App\Http\Controllers')->group(function(){
    Route::get('/flights', 'FlightController@index');
    Route::get('/flight/{id}', 'FlightController@update');
    Route::post('/flight', 'FlightController@store');
    Route::put('/flight/{id}', 'FlightController@update_action');
    Route::delete('/flight/{id}', 'FlightController@delete_action');
});

// แสดงรายการทั้งหมด
Route::get('/pokedex', [PokedexController::class, 'index']);

// ฟอร์มเพิ่มข้อมูล
Route::get('/pokedex/create', [PokedexController::class, 'create']);
Route::post('/pokedex', [PokedexController::class, 'store']);
// ฟอร์มแก้ไขข้อมูล
Route::get('/pokedex/{id}/edit', [PokedexController::class, 'edit']);
Route::put('/pokedex/{id}', [PokedexController::class, 'update']);

// ลบข้อมูล
Route::delete('/pokedex/{id}', [PokedexController::class, 'destroy']);