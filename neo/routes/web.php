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

Route::get('/', 'PagesController@index');
Route::get('/contacts', 'PagesController@contact');
Route::get('/contacts', 'PagesController@create');

Route::get('/about', 'PagesController@about');
Route::get('/nashi-zakazchiki', 'PagesController@zakazchiki');
Route::get('/nashi-partnery', 'PagesController@partnery');
Route::get('/helpful-info', 'PagesController@helpful');


Route::get('/news', 'ArticlesController@index');
Route::get('/news/{id}', 'ArticlesController@show');


Auth::routes();
Route::get('/admin', 'HomeController@admin')->name('home');
