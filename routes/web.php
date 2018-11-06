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

Route::get('/', 'HomeController@index');

Route::post('/store', 'RestaurantController@store');

Route::post('/update', 'RestaurantController@update');

Route::get('/restaurant/{id}', 'RestaurantController@view');

Route::get('/admin', 'RestaurantController@index');

Route::get('/admin/create', 'RestaurantController@create');

Route::get('/admin/edit/{id}', 'RestaurantController@edit');

//bad practice, just for now
Route::get('/delete/{id}', 'RestaurantController@delete');
