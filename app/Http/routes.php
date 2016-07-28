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

Route::resource('recepcion', 'Operadores\RecepcionController');
Route::resource('despacho', 'Despachadores\DespachadoresController');
Route::get('estadisticas', 'Estadisticas\EstadisticasController@fecha');
//Route::get('/', 'Operadores\RecepcionController@recepcion');

Route::group(
    array('prefix' => 'admin', 'middleware' => 'auth'), 
    function() {
    	Route::resource('grupos', 'Admin\GruposController');
        Route::resource('users', 'Admin\UsersController');
        Route::resource('organismos', 'Admin\OrganismosController');
        Route::resource('contactos', 'Admin\ContactosController');
        //Route::resource('motivos', ' Admin\RecepcionController');
    }
);

//Route::resource('recepcion', 'RecepcionController');


//Route::resource('contacto', 'Operadores\ContactoController');//admin
//Route::get('recepcion', 'RecepcionController@recepcion');

//Route::resource('despacho', 'DespachoController');
//Route::post('login', 'Auth\AuthController@postLogin');
//Route::get('logout', 'Auth\AuthController@postLogin');
//Route::auth();

//Route::get('/home', 'HomeController@index');


Route::auth();

Route::get('/home', 'HomeController@index');
