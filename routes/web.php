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
Route::get('/login', 'PrimarioController@login');



Auth::routes();

Route::get('/forum', 'HomeController@forum');
Route::get('/perfil/{user_tag}', 'UsuarioController@getIndex');
