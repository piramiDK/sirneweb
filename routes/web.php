<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within  a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

//Route::get('/home', 'HomeController@home')->name('home');

//Route::get('/integrante', 'IntegranteController@index')->name('integrante'); //nucleo

//formularios url
//Route::get('integrante', ['uses'=>'IntegranteController@index', 'as'=>'integrante.index'])->middleware('auth');
Route::get('integrante', ['uses'=>'IntegranteController@store', 'as'=>'integrante.index'])->middleware('auth');
//index nucleo
Route::get('nucleo', ['uses'=>'CoreController@index', 'as'=>'nucleo.index'])->middleware('auth');
//editar nucleo
Route::get('nucleo/edit/{id}',['uses'=>'CoreController@editcore', 'as'=>'nucleo.edit'])->middleware('auth');
//actualizar nucleo
Route::post('nucleo/update',['uses'=>'CoreController@updatecore', 'as'=>'nucleo.update'])->middleware('auth');

//asignar table
Route::get('indexasignarcom', ['uses'=>'CoreController@indexasignarcom', 'as'=>'nucleo.indexasignarcom'])->middleware('auth');
//localizacion table
Route::get('indexlocalizacion', ['uses'=>'CoreController@indexlocalizacion', 'as'=>'nucleo.indexlocalizacion'])->middleware('auth');

//formulario url + id por url
Route::get('nucleo/asignarcom/{id}/{comunidad}','CoreController@indexcasa')->middleware('auth');
Route::get('nucleo/asignarintegrante/{id}','CoreController@indexintegrante')->middleware('auth');



//store url
Route::post('integrante/store', ['uses'=>'IntegranteController@store', 'as'=>'integrante.store'])->middleware('auth');
Route::post('nucleo/store', ['uses'=>'CoreController@store', 'as'=>'nucleo.store'])->middleware('auth');
Route::post('nucleo/asignarcom/asignars', ['uses'=>'CoreController@asignars', 'as'=>'nucleo.asignars'])->middleware('auth');

//combo select dependiente url
Route::get('/municipio', 'CoreController@municipio')->name('municipio'); //municipio
Route::get('/parroquia', 'CoreController@parroquia')->name('parroquia'); //parroquia


Route::get('nucleo/localizacion/{id}/{comunidad}', ['uses'=>'LocalizacionController@localizacion', 'as'=>'localizacion.localizacion'])->middleware('auth');
Route::get('nucleo/localizaciones/{id}/option', ['uses'=>'LocalizacionController@option', 'as'=>'localizacion.option'])->middleware('auth');

Route::post('nucleo/localizacion/store', ['uses'=>'LocalizacionController@store', 'as'=>'localizacion.store'])->middleware('auth');


Route::get('nucleo/asignarcasa/{id}/option', ['uses'=>'CoreController@option', 'as'=>'asignar.option'])->middleware('auth');

//reportes excel
Route::get('importExportView', 'ExcelController@importExportView');
Route::get('export', 'ExcelController@export')->name('export');
Route::post('import', 'ExcelController@import')->name('import');



