<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('homepage');
});

Route::get('/user/register', 'HomeController@getRegister');
Route::post('/user/register', 'HomeController@postRegister');

Route::get('/user/login', 'HomeController@getLogin');
Route::post('/user/login', 'HomeController@postLogin');

Route::get('/user/logout', 'HomeController@logout');
Route::get('/admin', function()
{
	return View::make('admin.main');
});
