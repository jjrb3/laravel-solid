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

Route::post('/create-user','Store\StoreController@store');
Route::post('/pay','Pay\PayController@pay');
Route::post('/user','User\UserController@index');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
