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

// Load the homepage
Route::get('/', function()
{
	return View::make('homepage');
});

// User registration to the system
Route::get('/user/register', 'UserController@getRegister');
Route::post('/user/register', 'UserController@postRegister');

// User login into the system.
Route::get('/user/login', 'UserController@getLogin');
Route::post('/user/login', 'UserController@postLogin');

// User logout
Route::get('/user/logout', 'UserController@logout');

// Load admin dashboard
Route::get('/admin', function()
{
	return View::make('admin.main');
});

// User as a teacher
Route::get('/teach', 'CourseController@getCourses');
