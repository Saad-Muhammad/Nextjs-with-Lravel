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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('user-login', 'Api\Auth\JwtAuthController@login');
Route::post('user-register', 'Api\Auth\JwtAuthController@register');

Route::group(['middleware' => 'jwt.auth'], function () {
    //User Auth
    Route::get('user-logout', 'Api\Auth\JwtAuthController@logout');
    // Route::get('user-info', 'Api\Auth\JwtAuthController@getCurrentUser');

    //Products
});
