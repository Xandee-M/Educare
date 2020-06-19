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


Route::get('/', function () {
    return view('welcome');
});

Route::get('/thiago', function () { /* define url */
    return view('thiago'); /* define qual arquivo vai vir com a url */
});

Route::get('/xande', function () {
    return view('xande');
});

Route::get('/joao', function()
{
    return view('joao');
});

Route::get('/kenny', function()
{
    return view('kenny');
});

Route::get('/marcos', function()
{
    return view('marcos');
});