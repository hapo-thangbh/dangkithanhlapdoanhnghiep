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

// Auth::routes();
Route::get('/admin/login','AuthController@getLogin')->name('admin.login');
Route::post('/admin/login','AuthController@postLogin')->name('admin.login');

Route::get('/admin/register','AuthController@getRegister')->name('admin.register');
Route::post('/admin/register','AuthController@postRegister')->name('admin.register');
Route::get('/admin/logout','AuthController@logout')->name('admin.logout');

Route::get('/admin', 'HomeController@dashboard')->name('admin.dashboard');
Route::get('/admin/{any}', 'HomeController@dashboard')->where('any', '.*');

/* Người dùng */
Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/post/{id}', 'PostController@detailPost')->name('detail_post');

// Xóa comment
Route::get('/delete-comment/{id}', 'PostController@deleteComment')->name('delete_comment');
// Comment
Route::post('/comment', 'PostController@comment')->name('comment');


// Reply
Route::post('/reply', 'PostController@reply')->name('reply');
// Xóa reply
Route::get('/delete-reply/{id}', 'PostController@deleteReply')->name('delete_reply');


/* api */
Route::group(['prefix' => 'api'], function() {
    //Post
    Route::get('/posts','PostController@index');
    Route::get('/posts/all','PostController@getAllPosts');
    Route::post('/posts/add','PostController@addPost');
    Route::get('/posts/edit/{id}','PostController@editPost');
    Route::put('/posts/update/{id}','PostController@updatePost');
    Route::delete('/posts/delete/{id}','PostController@deletePost');

    Route::get('/posts/count','PostController@countPost');

    //Category
    Route::get('/categories','CategoryController@index');
    Route::get('/categories/all','CategoryController@getAllCategories');
    
    Route::get('/treeView','CategoryController@treeView');
    Route::post('/categories/add','CategoryController@addCategory');
    Route::get('/categories/edit/{id}','CategoryController@editCategory');
    Route::put('/categories/update/{id}','CategoryController@updateCategory');
    Route::delete('/categories/delete/{id}','CategoryController@deleteCategory');

    Route::get('/categories/allParent', 'CategoryController@allParent');

    Route::post('/childrenCate', 'CategoryController@childrenCate');

    //User
    Route::get('/users', 'UserController@index');
    Route::get('/users/count','UserController@countUser');
    Route::get('/infoUser', 'UserController@getInfoUser');

    Route::post('/users/create', 'UserController@store');
    Route::get('/users/edit/{id}', 'UserController@edit');
    Route::put('/users/edit/{id}', 'UserController@update');

    Route::delete('/users/delete/{id}', 'UserController@deleteUser');
});
/* end api */

