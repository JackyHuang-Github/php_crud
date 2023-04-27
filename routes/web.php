<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;

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
Route::namespace('App\Http\Controllers')->group(function () {
    Route::get('/', 'UserController@index');
    Route::get('users/delete/{id}', 'UserController@delete');
    Route::post('users/deleteSelected', 'UserController@deleteSelected');
});
