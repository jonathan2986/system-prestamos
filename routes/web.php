<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

Route::get('/cobradores', 'CobradoresController@index');
Route::post('/cobrador/create', 'CobradoresController@create');
Route::get('/cobrador/{id}', 'CobradoresController@getCobrador');
Route::put('/cobrador/{id}', 'CobradoresController@update');
Route::delete('/cobrador/{id}', 'CobradoresController@destroy');