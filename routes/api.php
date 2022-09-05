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

Route::get('restaurant', 'Api\RestaurantController@index');
Route::get('restaurant/{slug}', 'Api\RestaurantController@show');
Route::get('category', 'Api\CategoryController@index');
Route::get('plate', 'Api\PlateController@index');

//Orders
Route::get('orders/generate', 'Api\OrderController@generate');
Route::get('orders/make-payment', 'Api\OrderController@makePayment');