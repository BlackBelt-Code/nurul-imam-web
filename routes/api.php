<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::prefix('v1')->group(function () {
    Route::prefix('auth')->group(function () {
        Route::post('/register', 'AuthController@register');
        Route::post('/login', 'AuthController@login');
        Route::get('/refresh', 'AuthController@refresh');

        Route::middleware('auth:api')->namespace('V1')->group(function () {
            // Route::get('user', 'AuthController@user');

            // Route::post('logout', 'AuthController@logout');
        });
    });
    Route::prefix('data')->namespace('V1')->group(function () {
        Route::post('/login', 'ApiUserController@login');
        Route::post('/register', 'ApiUserController@register');
        Route::get('/user', 'ApiUserController@getAuthenticatedUser')->middleware('jwt.verify');

        Route::prefix('teacher')->group(function () {
            Route::post('/store', 'ApiTeacherController@store');
            Route::get('/', 'ApiTeacherController@index');
        });

        Route::prefix('rpp')->group(function () {
            Route::get('/', 'ApiRppController@index');
            Route::post('/store', 'ApiRppController@store');
        });

        Route::prefix('posting')->group(function () {
            Route::get('/', 'ApiPostController@index');
            Route::get('/user', 'ApiPostController@getPostUser');
            Route::post('/store', 'ApiPostController@store')->middleware('jwt.verify');
        });
    });
});
