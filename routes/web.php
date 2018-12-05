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



Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::resource('orders', 'OrderController');

Route::get('profile', 'UserProfileController@index')->name('profile');

Route::get('ourServices', 'RoutingController@getServices')->name('ourServices');

Route::get('aboutUs', 'RoutingController@getAboutUs')->name('aboutUs');

Route::get('faq', 'RoutingController@getFaq')->name('faq');

Route::get('admin', 'RoutingController@getAdmin')->name('admin');
