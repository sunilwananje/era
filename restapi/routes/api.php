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
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('features/{iso2}', 'FeatureController@index');
Route::get('countries', 'CountryController@index');
Route::get('country/{ip}', 'FeatureController@getCountry');
Route::get('testimonials', 'TestimonialController@index');

Route::post('hero/save', 'UserController@store');
Route::post('country/save', 'CountryController@store');
