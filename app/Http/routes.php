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

Route::get('/', function () {
    return view('welcome');
});

Route::get('inicio',[
'uses'	=>'HomeController@index',
'as'	=>'inicio'
]);


//Beneficiados
Route::get('/beneficiados',[//mostrar listado de beneficiados
'uses'	=>'BeneficiadoController@index',
'as'	=>'beneficiado'
]);

Route::get('/ver-detalles-beneficiados/{id}',[//ver el detalle de cada beneficiado
'uses'	=>'BeneficiadoController@details',
'as'	=>'beneficiado.detail'
]);

//*** admin

Route::group(['middleware'=>'auth'], function(){

	Route::get('/crear-beneficiado/',[//mostrar formulario para crear un nuevo beneficiado
	'uses'	=>'BeneficiadoController@create',
	'as'	=>'beneficiado.create'
	]);

	Route::post('/crear-beneficiado/',[//mostrar formulario para crear un nuevo beneficiado
	'uses'	=>'BeneficiadoController@store',
	'as'	=>'beneficiado.store'
	]);
});
//***

//certficados

Route::get('/generar-certificado/{id}',[
'uses'	=>'BeneficiadoController@certificado',
'as'	=>'beneficiado.certificado'
]);

///




//***


//

Route::get('/certificado', function () {
    return view('beneficiados.certificado');
});


// Authentication routes...
Route::get('ingreso',[
'uses'	=>'Auth\AuthController@getLogin',
'as'	=>'login'
]);
Route::post('ingreso', 'Auth\AuthController@postLogin');

Route::get('cerrar-sesión', [
'uses'	=>'Auth\AuthController@getLogout',
'as'	=>'cerrar'
]);  


// Registration routes...
Route::get('crear-cuenta',[
'uses'	=> 'Auth\AuthController@getRegister',
'as'	=>'registro'
]);

Route::post('crear-cuenta', 'Auth\AuthController@postRegister');	