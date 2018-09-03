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

Route::get('/', 'PagesController@login');

Route::get('/dashboard', 'PagesController@dashboard');

Route::get('/channel', 'PagesController@channel');

Route::get('/table', 'PagesController@table');

Auth::routes();