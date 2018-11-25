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



// Get list of Movies
Route::get('movies','MovieController@index');

Route::get('qualities','QualityController@index');

Route::get('quality/{id}','QualityController@index');

// Get specific Movie
Route::get('movie/{id}','MovieController@show');

// Delete a Movie
Route::delete('movie/{id}','MovieController@destroy');

// Update existing Movie
Route::put('movie/{id}','MovieController@update');

// Create new Movie
Route::post('movie','MovieController@store');