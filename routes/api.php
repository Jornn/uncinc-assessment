<?php

use Illuminate\Support\Facades\Route;
use Laravel\Passport\Passport;
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

Route::get('/todo', 'TodoController@index')->middleware('client');
Route::post('/todo', 'TodoController@store')->middleware('client');