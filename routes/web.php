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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('{path}','HomeController@index')->where('path','([A-z\d-\/_.]+)?');
Route::get('{any}', function () {
    return view('Admin.Elements.master');
})->where('any','.*');

Route::group(['prefix'=>'admin'],function(){
    Route::get('/','DashboardController@index')->name('admin.dashboard');
    Route::get('/dashboard','DashboardController@index')->name('admin.dashboard');
});
