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
Route::get('/', 'UserController@index');
Route::get('login', 'UserController@index');
Route::post('login', 'UserController@login');
Route::get('registro', 'UserController@create');
Route::post('registro', 'UserController@store');
Route::get('logout', 'UserController@logout');
Route::get('auth', 'UserController@isLogged');

Route::get('publica', 'HomeController@publica');

Route::group(array('before' => 'auth'), function () {
	Route::get('privada', 'HomeController@privada');	
	
});

Route::resource('proyectos', 'ProyectoController');
Route::post('proyectos/{id}/update', 'ProyectoController@update');
Route::get('proyectos/{id}/delete', 'ProyectoController@destroy');


Route::resource('recursosHumanos', 'RecursoHumanoController');
Route::post('recursosHumanos/{id}/update', 'RecursoHumanoController@update');
Route::get('recursosHumanos/{id}/delete', 'RecursoHumanoController@destroy');

Route::resource('interesados', 'InteresadosController');
Route::post('interesados/{id}/update', 'InteresadosController@update');
Route::get('interesados/{id}/delete', 'InteresadosController@destroy');

Route::resource('tipoComunicaciones', 'TipoComunicacionController');
Route::post('tipoComunicaciones/{id}/update', 'TipoComunicacionController@update');
Route::get('tipoComunicaciones/{id}/delete', 'TipoComunicacionController@destroy');

Route::resource('riesgos', 'RiesgosController');
Route::post('riesgos/{id}/update', 'RiesgosController@update');
Route::get('riesgos/{id}/delete', 'RiesgosController@destroy');

Route::resource('comunicaciones', 'ComunicacionesController');
Route::post('comunicaciones/{id}/update', 'ComunicacionesController@update');
Route::get('comunicaciones/{id}/delete', 'ComunicacionesController@destroy');

Route::resource('alcancesProyectos', 'AlcanceProyectoController');
Route::post('alcancesProyectos/{id}/update', 'AlcanceProyectoController@update');
Route::get('alcancesProyectos/{id}/delete', 'AlcanceProyectoController@destroy');

Route::resource('adquisiciones', 'AdquisicionesController');
Route::post('adquisiciones/{id}/update', 'AdquisicionesController@update');
Route::get('adquisiciones/{id}/delete', 'AdquisicionesController@destroy');

Route::resource('cronogramas', 'CronogramaController');
Route::post('cronogramas/{id}/update', 'CronogramaController@update');
Route::get('cronogramas/{id}/delete', 'CronogramaController@destroy');

Route::resource('costos', 'CostoController');
Route::post('costos/{id}/update', 'CostoController@update');
Route::get('costos/{id}/delete', 'CostoController@destroy');

Route::resource('consultas', 'ConsultasController');
Route::post('consultas/{id}/update', 'ConsultasController@update');
Route::get('consultas/{id}/delete', 'ConsultasController@destroy');

Route::post('consultas/show', 'ConsultasController@show');
