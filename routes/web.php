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

// BACKEND
Route::group(['prefix' => '/dashboard', 'namespace' => 'Backend', 'middleware' => ['auth', 'role']], function(){

	Route::get('/', 'FrontController');

	// USERS
	Route::group(['prefix' => '/users'], function(){
		Route::get('/', 'UserController@index');
		Route::get('/create', 'UserController@getCreate');
		Route::get('/{user}/update', 'UserController@getUpdate');
		Route::get('/{user}/delete', 'UserController@delete');

		Route::post('/create', 'UserController@postCreate');
		Route::post('/{user}/update', 'UserController@postUpdate');
	});

	// TASKS
	Route::group(['prefix' => '/tasks'], function(){
		Route::get('/', 'TaskController@index');
		Route::get('/create', 'TaskController@getCreate');
		Route::get('/{task}/update', 'TaskController@getUpdate');
		Route::get('/{task}/delete', 'TaskController@delete');

		Route::post('/create', 'TaskController@postCreate');
		Route::post('/{task}/update', 'TaskController@postUpdate');
	});
});


// FRONTEND
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
			Route::get('/settings', 'SettingsController@getUpdate');
			Route::get('/password', 'PasswordController@getUpdate');

			Route::post('/settings', 'SettingsController@getUpdate');
			Route::post('/password', 'PasswordController@getUpdate');
		});


		// TASKS
		Route::group(['prefix' => '/tasks'], function(){
			Route::get('/', 'TaskController@index');
			Route::get('/create', 'TaskController@getCreate');
			Route::get('/{task}/update', 'TaskController@getUpdate');
			Route::get('/{task}/delete', 'TaskController@delete');

			Route::post('/create', 'TaskController@postCreate');
			Route::post('/{task}/update', 'TaskController@postUpdate');
		});


		// LOGOUT
		Route::get('/logout', 'AuthController@logout');
	});
});