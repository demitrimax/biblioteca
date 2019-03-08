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

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('libros', 'librosController');
Route::resource('autores', 'autoresController');
Route::resource('editoriales', 'editorialesController');
Route::resource('clientes', 'clientesController');
Route::resource('generos', 'generoController');

Route::resource('user','UserController');
Route::resource('roles','RoleController');
Route::resource('permissions', 'PermissionController');
Route::resource('prestamos', 'prestamosController');

Route::get('/GetMunicipios/{id}','clientesController@GetMunicipios');


Route::resource('ejemplares', 'ejemplaresController');
