<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();





Route::group(['middleware'=>['auth']], function(){

	Route::get('/home', 'HomeController@index')->name('home');

	Route::resource('config', 'ConfigController');

	Route::get('Configuracion', [
	'uses' => 'ConfigController@editarConfig',
	'as' => 'editar.config'
	]);



});

Route::group(['middleware'=>['admin'],'prefix' => 'admin'], function(){

		//funciones del admin:

	Route::resource('users', 'UserController');
	Route::resource('files', 'FileController');

	Route::get('/CrearUsuario', [
	'uses'=>'UserController@create',
	'as'=>'crear.usuario'
	]);

	Route::get('/Usuarios', [
	'uses' => 'UserController@index',
    'as'   => 'usuarios.index' ]);

    Route::get('/SubirArchivo', [
    'uses'=>'FileController@create',
    'as'=>'subir.archivo']);

    Route::get('/Archivos', [
	'uses' => 'FileController@index',
    'as'   => 'archivos.index' ]);

    Route::put('/Blanquear/{id}', [
    'uses'=>'UserController@blanquearPassword',
    'as'=>'blanquear.password'
    ]);

});




