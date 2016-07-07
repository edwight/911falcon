<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*
Route::controllers([
    'users' => 'UserController',
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
*/
Route::get('/', function () {
    return view('welcome');
});
//Route::resource('users', 'UserController');
Route::resource('contacto', 'ContactoController');
Route::post('login', 'Auth\AuthController@postLogin');
Route::get('logout', 'Auth\AuthController@postLogin');
Route::auth();

Route::get('/home', 'HomeController@index');

