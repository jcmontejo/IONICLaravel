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

Route::get('contacts', 'API\ContactController@index');
Route::get('contacts/{id}', 'API\ContactController@show');
Route::post('contacts', 'API\ContactController@store');
Route::put('contacts/{id}', 'API\ContactController@update');
Route::delete('contacts/{id}', 'API\ContactController@delete');

