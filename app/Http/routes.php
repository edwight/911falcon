<?php
use Illuminate\Support\Facades\Auth;


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
Route::group(
    array('prefix' => 'admin', 'middleware' => ['auth','admin']), 
    function() {
    //Route::resource('recepcion', 'Operadores\RecepcionController');
    Route::resource('despacho', 'Despachadores\DespachadoresController');
    Route::get('estadisticas','Estadisticas\EstadisticasController@fecha');
    Route::get('estadisticas/motivos', 'Estadisticas\EstadisticasController@motivos');
    Route::get('estadisticas/municipios', 'Estadisticas\EstadisticasController@municipios');
    Route::get('estadisticas/organismos', 'Estadisticas\EstadisticasController@organismos');
    Route::get('estadisticas/organismosHoy', 'Estadisticas\EstadisticasController@organismosHoy');
    Route::get('estadisticas/llamadasHoy', 'Estadisticas\EstadisticasController@llamadasHoy');
    Route::get('estadisticas/casosHoy', 'Estadisticas\EstadisticasController@casosHoy');
    Route::get('estadisticas/municipiosMotivos', 'Estadisticas\EstadisticasController@municipiosMotivos');
    //Route::get('estadisticas/motivos', 'Estadisticas\EstadisticasController@motivos');
    //Route::get('/', 'Operadores\RecepcionController@recepcion');
    Route::resource('recepcion', 'Operadores\RecepcionController');
    }
);

Route::group(
    array('prefix' => 'admin', 'middleware' => ['auth','admin']), 
    function() {
        Route::resource('dashboard', 'Admin\DashboardsController');
        Route::resource('grupos', 'Admin\GruposController', ['as'=>'grupos']);
        Route::resource('users', 'Admin\UsersController', ['as'=>'users']);
        Route::resource('organismos', 'Admin\OrganismosController');
        Route::resource('contactos', 'Admin\ContactosController');
        //Route::resource('motivos', ' Admin\RecepcionController');
    }
);

Route::get('prueba',function(){
    

    $user = Auth::user();
    return $user->name.' roles '.$user->roles;

    if (Auth::check()) {
       return 'estoy logeado';
    }
}
);
//Route::resource('recepcion', 'RecepcionController');


//Route::resource('contacto', 'Operadores\ContactoController');//admin
//Route::get('recepcion', 'RecepcionController@recepcion');

//Route::resource('despacho', 'DespachoController');

//Route::get('logout', 'Auth\AuthController@postLogin');
//Route::auth();

//Route::get('/home', 'HomeController@index');


//Route::auth();
Route::get('/', 'Auth\AuthController@getLogin');
Route::post('/', 'Auth\AuthController@postLogin');
Route::get('logout', 'Auth\AuthController@logout');


Route::get('/home', 'HomeController@index');
