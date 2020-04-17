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

Route::post('register', 'UserController@register');
Route::post('login', 'UserController@login');
Route::get('user/{user}/address', 'UserController@show_address');
Route::get('user/{user}', 'UserController@show');

Route::post('address','AddressController@store');
Route::get('address/{address}','AddressController@show');
Route::get('address/{address}/user','AddressController@show_user');
Route::put('address/{address}','AddressController@update');
Route::delete('address/{address}','AddressController@destroy');