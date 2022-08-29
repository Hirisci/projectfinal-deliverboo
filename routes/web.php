<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});



Route::middleware('auth')
    ->namespace('Admin') //tutti i controller saranno dentro al namespace Admin
    ->name('admin.') //nome della rotta
    ->prefix('admin') //prefisso rotta
    ->group(function() { // creo gruppo che richiama /admin/home che richiama il controller
        Route::get('/home', 'HomeController@index')->name('home');
        Route::resource('category', 'CategoryController');
        Route::resource('user', 'UserController');
        Route::resource('plate', 'PlateController');
        Route::resource('order', 'OrderController');
});


// Route::get(
//     "{any?}",
//     function(){
//         return view('guest.home');}
// )->where("any",".*");
