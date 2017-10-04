<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/','LinguaController@index');
Route::get('linguas','LinguaController@index');
Route::post('lingua/save','LinguaContoller@store');
Route::post('lingua/edit/{id}','LinguaContoller@update');
Route::delete('lingua/delete/{id}','LinguaContoller@delete');


