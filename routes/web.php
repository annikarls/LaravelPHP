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

Route::get('/', 'PagesController@home');
Route::get('/login', 'PagesController@login');
Route::get('/events', 'PagesController@index');
Route::get('/beers', 'PagesController@index');
Route::get('/contact', 'PagesController@contact');
Route::get('/register', 'PagesController@register');

Route::resource('beers', 'BeersController');
Route::resource('events', 'EventsController');

Route::post('/store', "UserController@store");
Route::post('/logs', "UserController@logs");
