<?php

use App\Http\Controllers\Api\PlateController;
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

Route::get('restaurant', 'Api\RestaurantController@index');
Route::post('order', 'Api\OrderController@getData');
Route::get('restaurant/{slug}', 'Api\RestaurantController@show');
Route::get('category', 'Api\CategoryController@index');
Route::get('plate', 'Api\PlateController@index');
Route::get('plate/{slug}/menu', 'Api\PlateController@show' );

Route::get('payment/token', 'Api\OrderController@token');
Route::post('payment', 'Api\OrderController@sale');