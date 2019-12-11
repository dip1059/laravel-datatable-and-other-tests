<?php
/**
 * Created by PhpStorm.
 * User: asha
 * Date: 12/9/19
 * Time: 5:12 PM
 */

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'user', 'namespace' => 'Web\User', 'prefix' => 'user'], function (){
    Route::get('/dashboard', 'DashboardController@dashboard')->name('user.dashboard');
});
