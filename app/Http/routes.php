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

Route::get('/create-user', 'Site\login\loginController@createUser');
Route::post('/create-user', 'Site\login\loginController@validateUser');
Route::get('/login', 'Site\login\loginController@showLogin');
Route::post('/login', 'Site\login\loginController@doLogin');

Route::get('/comunicado-fiv', 'Site\Comunicados\comunicadosController@showFiv');
Route::post('/comunicado-fiv', 'Site\Comunicados\comunicadosController@doFiv');

Route::get('/comunicado-inovulacao', 'Site\Comunicados\comunicadosController@showInovulacao');
Route::post('/comunicado-inovulacao', 'Site\Comunicados\comunicadosController@doInovulacao');

Route::get('/comunicado-nascimento', 'Site\Comunicados\comunicadosController@showNascimento');
Route::post('/comunicado-nascimento', 'Site\Comunicados\comunicadosController@doNascimento');

Route::get('/solicitacao', 'Painel\Solicitacao\solicitacaoController@showSolicitacao');
Route::post('/solicitacao', 'Painel\Solicitacao\solicitacaoController@doSolicitacao');
