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

// Route::post('/register', 'App\Http\Controllers\Auth\RegisterController');
// Route::post('/login', 'App\Http\Controllers\Auth\LoginController');
// Route::apiResource('/hosts', 'HostsController');
// Route::apiResource('/events', 'EventsController');
// Route::apiResource('/tickets', 'TicketsController');
Route::post('register', 'API\RegisterController@register');
Route::post('login', 'API\RegisterController@login');

Route::middleware('auth:api')->group(function () {
    Route::resource('hosts', 'HostsController');
    Route::resource('events', 'EventsController');
    Route::resource('tickets', 'TicketsController');
});
