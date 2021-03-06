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

Route::post('signup/saveContact', 'SignupController@saveContact');
Route::get('signup/testEmail', 'SignupController@testEmail');
Route::post('signup/uploadImage', 'SignupController@uploadImage');
Route::post('signup/deleteImage', 'SignupController@deleteImage');
Route::get('signup/complete/{id}', 'SignupController@complete'); // http://landing.dev/api/signup/complete/37