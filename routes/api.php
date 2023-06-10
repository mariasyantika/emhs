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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/mahasiswa/read','MhsAPIController@read');
Route::post('/mahasiswa/create','MhsAPIController@create');
Route::post('/mahasiswa/update/{id}','MhsAPIController@update');
Route::delete('/mahasiswa/delete/{id}','MhsAPIController@delete');

Route::get('/DataTask/read','TaskAPIController@read');
Route::post('/DataTask/create','TaskAPIController@create');
Route::post('/DataTask/update/{id}','TaskAPIController@update');
Route::delete('/DataTask/delete/{id}','TaskAPIController@delete');

