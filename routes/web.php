<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', 'PrimarioController@home');

Auth::routes();

Route::get('/forum', 'PerguntasController@getIndex');
Route::get('/perfil/{user_tag}', 'UsuarioController@getIndex');
Route::post('/pub', 'PerguntasController@save');
Route::get('/perguntas/{pergunta_id}', 'RespostasController@getIndex');
