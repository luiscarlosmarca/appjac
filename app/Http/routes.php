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
Route::get('/beneficiados',[
'uses'	=>'BeneficiadoController@index',
'as'	=>'beneficiado'
]);

Route::get('/ver-detalles-beneficiados/{id}',[
'uses'	=>'BeneficiadoController@details',
'as'	=>'beneficiado.detail'
]);




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