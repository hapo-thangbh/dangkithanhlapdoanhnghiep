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
    return view('home');
});

// Auth::routes();
Route::get('/admin/login','AuthController@getLogin')->name('admin.login');
Route::post('/admin/login','AuthController@postLogin')->name('admin.login');

Route::get('/admin/register','AuthController@getRegister')->name('admin.register');
Route::post('/admin/register','AuthController@postRegister')->name('admin.register');
Route::get('/admin/logout','AuthController@logout')->name('admin.logout');

Route::get('/admin', 'HomeController@dashboard')->name('admin.dashboard');
Route::get('/admin/{any}', 'HomeController@dashboard')->where('any', '.*');

/* Người dùng */
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/new-detail', 'HomeController@newDetail')->name('newDetail');


/* api */
Route::group(['prefix' => 'api'], function() {
    Route::get('/posts','PostController@index');
    Route::post('/posts/add','PostController@addPost');
    Route::get('/posts/edit/{id}','PostController@editPost');
    Route::put('/posts/update/{id}','PostController@updatePost');
    Route::delete('/posts/delete/{id}','PostController@deletePost');

    Route::get('/categories','CategoryController@index');
    Route::post('/categories/add','CategoryController@addCategory');
    Route::get('/categories/edit/{id}','CategoryController@editCategory');
    Route::put('/categories/update/{id}','CategoryController@updateCategory');
    Route::delete('/categories/delete/{id}','CategoryController@deleteCategory');
});
/* end api */

