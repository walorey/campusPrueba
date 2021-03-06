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

Route::get('verCertificado', function(){
	return view('certificado.certificado');
});

Auth::routes();

Route::get('Certificado/{Nombre}/{Apellido}', [
	'uses' => 'FrontController@certificado'
]);



Route::group(['middleware'=>['auth']], function(){

	Route::get('/home', 'HomeController@index')->name('home');

	Route::resource('config', 'ConfigController');

	Route::get('Configuracion', [
	'uses' => 'ConfigController@editarConfig',
	'as' => 'editar.config'
	]);

	Route::resource('discusiones', 'DiscusionesController');

	Route::group(['prefix' => 'foro'], function(){

		Route::get('/', [
		'uses' => 'DiscusionesController@index',
		'as' => 'foro.index'
		]);

		Route::get('/NuevaDiscusion', [
		'uses' =>'DiscusionesController@create',
		'as' =>'crear.discusion'
		]);

		Route::get('MisPreguntas', [
		'uses' => 'DiscusionesController@misDiscusiones',
		'as' => 'mis.discusiones'
		]);

	});

	Route::post('/Comentarios/{id}', [
	'uses'=>'DiscusionesController@comentar',
	'as'=>'discusiones.comentar'
	 ]);


});

Route::group(['middleware'=>['admin'],'prefix' => 'admin'], function(){

		//funciones del admin:

	Route::resource('users', 'UserController');
	Route::resource('files', 'FileController');
	Route::resource('comentarios', 'ComentarioController');

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




