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

Route::resource('galleries', 'GalleryController');
Route::post('comments', 'CommentController@store');
Route::delete('comments/{id}', 'CommentController@destroy');

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
    Route::post('register', 'AuthController@register');

    Route::get('my-galleries', 'GalleryController@myGalleries');
    Route::post('galleries', 'GalleryController@store');
    Route::get('author/{id}', 'GalleryController@authorGalleries');
    Route::get('galleries/{id}', 'GalleryController@show');
    Route::delete('galleries/{id}', 'GalleryController@destroy');
    
});
