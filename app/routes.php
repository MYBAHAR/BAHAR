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

/*
<<<<<<< HEAD
<<<<<<< HEAD
=======*/
// User as a teacher
Route::resource('/teach/courses', 'CourseController');
// >>>>>>> 5f740f01877a596c3bdafe4ed652241822f091ba

// Temporary Route to dashboard
Route::get('/dashboard' , function(){
	return View::make('dashboard');
});

// Temporary Route to coursehome
Route::get('/course' , function(){
	return View::make('coursehome');
});

// All Courses list
Route::get('/all' , function(){
	return View::make('all-courses');
});
/*<<<<<<< HEAD

=======*/
// User as a teacher
Route::resource('/teach/courses', 'CourseController');
// >>>>>>> 9d3ca1e736bc73f7712919dc58138e73d40a60f3
// =======
// >>>>>>> 5f740f01877a596c3bdafe4ed652241822f091ba
