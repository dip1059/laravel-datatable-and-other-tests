<?php
/**
 * Created by PhpStorm.
 * User: asha
 * Date: 12/9/19
 * Time: 5:12 PM
 */

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['admin', 'lang'], 'namespace' => 'Web\Admin', 'prefix' => 'admin'], function (){
    Route::get('/dashboard', 'DashboardController@dashboard')->name('admin.dashboard');
    Route::get('/dashboard-yajra', 'DashboardController@dashboardYajra')->name('admin.dashboard.yajra');
    Route::get('/delete-user/{id}', 'UserController@deleteUser')->name('delete.user');
    Route::get('/change-lang/{lang}', function ($lang) {
        Session::put('lang',$lang);
        return redirect()->back();
    });
});
