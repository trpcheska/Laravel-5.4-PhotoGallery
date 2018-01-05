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

Route::get('/', 'AlbumController@index');
Route::get('/albums', 'AlbumController@index');
Route::get('/albums/create', 'AlbumController@create');
Route::get('/albums/{id}', 'AlbumController@show');
Route::post('/albums/create', 'AlbumController@store');



Route::get('/register' , 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

Route::get('/login' , 'SessionController@create');
Route::post('/login' , 'SessionController@check');
Route::get('/logout', 'SessionController@destroy');

Route::get('/photos/create/{id}', 'PhotoController@create');
Route::post('/photos/store', 'PhotoController@store');
//Route::get('/photos', 'PhotoController@show');
Route::get('/photos/{id}', 'PhotoController@show');

Route::get('/orders/{id}', 'OrderController@index');

Route::get('/orders/create', 'OrderController@store');