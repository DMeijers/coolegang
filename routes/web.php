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

	/* Direct to the home page */
Route::get('/', ['as' => 'homepage', 'uses' => 'HomepageController@showHomePage']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

