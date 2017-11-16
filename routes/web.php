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

Route::get('/', 'HomeController@index')->name('home');
Route::post('/signup', 'HomeController@letterSignUp')->name('home.signup');

Route::resource('/post','PostController');

Route::get('/admin', 'DashboardController@index')->name('admin');
Route::get('/admin/posts', 'PostController@index')->name('admin.posts');
Route::get('/admin/posts/create','PostController@create')->name('admin.posts.create');
Route::post('/admin/posts/store','PostController@store')->name('admin.posts.store');
Route::get('/admin/posts/{id}','PostController@edit')->name('admin.posts.edit');
Route::post('/admin/posts/update/{id}', 'PostController@update')->name('admin.posts.update');
Route::get('/admin/posts/delete/{id}','PostController@destroy')->name('admin.posts.delete');


