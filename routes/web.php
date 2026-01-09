<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('html101');
});

Route::get('/view2', function(){
    return view('myview2');
});

Route::get('/mycontroller', [App\Http\Controllers\MyController::class, 'INDEX']);
Route::post('/mycontroller', [App\Http\Controllers\MyController::class, 'process']);

Route::namespace('App\Http\Controllers')->group(function(){
    Route::get('/flights', 'FlightController@index');
    Route::get('/flight/{id}', 'FlightController@update');
    Route::post('/flight', 'FlightController@store');
    Route::put('/flight/{id}', 'FlightController@update_action');
    Route::delete('/flight/{id}', 'FlightController@delete_action');
});


use App\Http\Controllers\WorkshopHtmlFormController;

Route::get('/workshop-html-form', [WorkshopHtmlFormController::class, 'index'])->name('workshop.form');
Route::post('/workshop-html-form', [WorkshopHtmlFormController::class, 'store'])->name('workshop.store');


Route::namespace('App\Http\Controllers')->group(function () {
    Route::get('/pokedexs', 'PokedexController@index');
    Route::get('/pokedex/{id}', 'PokedexController@update');
    Route::post('/pokedex', 'PokedexController@store');
    Route::put('/pokedex/{id}', 'PokedexController@update_action');
    Route::delete('/pokedex/{id}', 'PokedexController@delete_action');
});

