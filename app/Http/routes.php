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
'uses'	=>'EventoController@index',
'as'	=>'inicio'
]);


//Beneficiados
Route::get('/beneficiados',[//mostrar listado de beneficiados
'uses'	=>'BeneficiadoController@index',
'as'	=>'beneficiado'
]);



//*** admin*******************///////////////

Route::group(['middleware'=>'auth'], function(){
//****beneficiado
	Route::get('/crear-beneficiado/',[//mostrar formulario para crear un nuevo beneficiado
	'uses'	=>'BeneficiadoController@create',
	'as'	=>'beneficiado.create'
	]);

	Route::post('/crear-beneficiado/',[//mostrar formulario para crear un nuevo beneficiado
	'uses'	=>'BeneficiadoController@store',
	'as'	=>'beneficiado.store'
	]);

	Route::get('/ver-detalles-beneficiados/{id}',[//ver el detalle de cada beneficiado
	'uses'	=>'BeneficiadoController@details',
	'as'	=>'beneficiado.detail'
	]);

	Route::patch('/ver-detalles-beneficiados/{id}',[
	'uses'	=>'BeneficiadoController@update',
	'as'	=>'beneficiado.update'
	]);

	Route::delete('/eliminar-beneficiados/{id}',[
	'uses'	=>'BeneficiadoController@destroy',
	'as'	=>'beneficiado.destroy'
	]);
//** juntas
	
	Route::get('/ver-detalles-juntas/{id}',[//ver el detalle de cada junta
	'uses'	=>'JuntaController@details',
	'as'	=>'junta.detail'
	]);

	Route::patch('/ver-detalles-juntas/{id}',[
	'uses'	=>'JuntaController@update',
	'as'	=>'junta.update'
	]);
	
	Route::get('/crear-junta/',[
	'uses'	=>'JuntaController@create',
	'as'	=>'junta.create'
	]);
	
	Route::post('/crear-junta/',[
	'uses'	=>'JuntaController@store',
	'as'	=>'junta.store'
	]);


	//** Eventos
	

	
	
	Route::get('/crear-evento/',[
	'uses'	=>'EventoController@create',
	'as'	=>'evento.create'
	]);
	
	Route::post('/crear-evento/',[
	'uses'	=>'EventoController@store',
	'as'	=>'evento.store'
	]);


	Route::get('/editar-eventos/{id}',[
	'uses'	=>'EventoController@edit',
	'as'	=>'evento.edit'
	]); 

	Route::patch('/editar-eventos/{id}',[
	'uses'	=>'EventoController@update',
	'as'	=>'evento.update'
	]);

	Route::delete('/eliminar-eventos/{id}',[
	'uses'	=>'EventoController@destroy',
	'as'	=>'evento.destroy'
	]);


	// Registration routes...
	Route::get('crear-cuenta',[
	'uses'	=> 'Auth\AuthController@getRegister',
	'as'	=>'registro'
	]);

Route::post('crear-cuenta', 'Auth\AuthController@postRegister');	

});
//***
/////////////**** Publico*****//////////////
//certficados

Route::get('/generar-certificado/{id}',[
'uses'	=>'BeneficiadoController@certificado',
'as'	=>'beneficiado.certificado'
]);

///


//Juntas
Route::get('/juntas',[//mostrar listado de juntas
'uses'	=>'JuntaController@index',
'as'	=>'junta'
]);


///***********
//eventos
Route::get('/ver-detalles-eventos/{id}',[
	'uses'	=>'EventoController@details',
	'as'	=>'evento.details'
	]);


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


