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
    return view('welcome');
});

Auth::routes();

Route::get('profile/{id}', ['as' => 'profile', 'uses' => 'ProfileController@showProfile']);

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/followers', ['as' => 'followers', 'uses' => 'FollowController@showFollowers']);

Route::get('/welcomepage', ['as' => 'welcomepage', 'uses' => 'WelcomePageController@showWelcomepage']);

Route::get('/', ['as' => 'homepage', 'uses' => 'HomepageController@showHomepage']);

Route::get('/showSubmitPost', ['as' => 'showSubmitPost', 'uses' => 'SubmitPostController@showSubmitPostPage']);

Route::post('/showSubmitPost', ['as' => 'submitPost', 'uses' => 'SubmitPostController@submitPost']);
