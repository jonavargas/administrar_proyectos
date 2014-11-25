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