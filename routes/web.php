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

Route::get('/', 'HomeController@welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/tag/{id}','HomeController@tag');

Route::get('/bookmark/view/{bookmark}','bookmarkController@show');

Route::get('/bookmark/create','bookmarkController@create');

Route::post('/bookmark/create','bookmarkController@store');

Route::get('/bookmark/edit/{bookmark}','bookmarkController@edit');

Route::post('/bookmark/edit/{bookmark}','bookmarkController@update');

Route::post('/bookmark/delete/{bookmark}','bookmarkController@destroy');
