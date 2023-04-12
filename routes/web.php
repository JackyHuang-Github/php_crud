<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::resource('users', 'App\Http\Controllers\UserController');
Route::namespace('App\Http\Controllers')->group(function() {
    Route::get('/', 'UserController@index');
});

// Route::namespace('App\Http\Controllers')->group(function() {
//     Route::get('/', 'UserController@index');
//     Route::get('users', 'UserController@index');
//     Route::get('users/create', 'UserController@create');
//     Route::post('users/store', 'UserController@store');
// });


