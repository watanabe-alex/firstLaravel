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

Route::get('/home', 'HomeController@viewHome');

Route::get('/cidades', 'CidadeController@viewCidades');

//interrogação significa que o parâmetro é opcional
Route::get('/request/id/{id?}','HomeController@request');

Route::get('/formulario', 'HomeController@exibirFormulario');
Route::post('/formulario', 'HomeController@cadastrarFormulario');