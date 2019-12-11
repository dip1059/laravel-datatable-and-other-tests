<?php

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

use Illuminate\Support\Facades\Route;

require base_path('routes/links/admin.php');
require base_path('routes/links/user.php');



Route::group(['middleware' => 'guest', 'namespace' => 'CustomAuth'], function () {
    Route::get('/', function() {return view('guest.welcome');});
    Route::get('/login', 'AuthController@loginGet')->name('login.get');
    Route::post('/login', 'AuthController@loginPost')->name('login.post');
});
Route::get('/logout', 'CustomAuth\AuthController@logout')->name('logout');

