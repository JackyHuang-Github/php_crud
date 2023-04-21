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
});

// Route::post('users/delete/{user}', function (App\Models\User $user) {
//     return $user;
// });

// Route::post('users/test1', 'App\Http\Controllers\UserController@delete1');