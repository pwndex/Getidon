<?php

use Illuminate\Support\Facades\Route;

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


Route::group(['prefix' => '/dashboard', 'namespace' => 'Backend', 'middleware' => ['role', 'auth']], function(){
	// BACKEND DASHBOARD
	Route::get('/', function () {
	    return view('Backend.master');
	});

	// BACKEND USERS
	Route::get('/users', function () {
	    return view('Backend.users.index');
	});


	// BACKEND TASKS
	Route::get('/tasks', function () {
	    return view('Backend.tasks.index');
	});
});


Route::group(['prefix' => '/', 'namespace' => 'Frontend'], function(){
	// IF NOT AUTH
	Route::group(['middleware' => 'guest'], function(){
		// AUTH
		Route::get('/', 'FrontController');
		Route::get('/login', 'AuthController@getLogin');
		Route::get('/register', 'AuthController@getRegister');

		Route::post('/login', 'AuthController@postLogin');
		Route::post('/register', 'AuthController@postRegister');
	});

	
	// IF AUTH
	Route::group(['middleware' => 'auth'], function(){
		// ACCOUNT
		Route::group(['prefix' => '/account', 'namespace' => 'Account'], function(){
			Route::get('/settings', 'SettingsController');
			Route::get('/password', 'PasswordController');
		});


		// TASKS
		Route::group(['prefix' => '/tasks'], function(){
			Route::get('/', 'TaskController@index');
			Route::get('/create', 'TaskController@getCreate');

			Route::post('/create', 'TaskController@postCreate');
		});


		// LOGOUT
		Route::get('/logout', 'AuthController@logout');
	});
});