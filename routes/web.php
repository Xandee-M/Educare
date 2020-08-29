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

Route::get('/login', 'PrimarioController@login');
Route::get('/forum', 'PrimarioController@forum');
Route::get('/perfil', 'PrimarioController@perfil');


Auth::routes();

Route::get('/', 'HomeController@index');
