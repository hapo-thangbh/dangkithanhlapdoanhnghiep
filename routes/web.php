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

// Route::get('{path}','HomeController@index')->where( 'path', '([A-z\/_.\d-]+)? ' );

Route::get('/admin', 'HomeController@dashboard');
Route::get('/admin/dashboard', 'HomeController@dashboard');

Route::get('/admin/user', 'HomeController@dashboard');
Route::get('/admin/user/add', 'HomeController@dashboard');
Route::get('/admin/user/edit', 'HomeController@dashboard');

Route::get('/admin/profile', 'HomeController@dashboard');

Route::get('/admin/post', 'HomeController@dashboard');
Route::get('/admin/post/add', 'HomeController@dashboard');
Route::get('/admin/post/edit', 'HomeController@dashboard');

// Route::get('{any}', function () {
//     return view('Admin.Elements.master');
// })->where('any','.*');

