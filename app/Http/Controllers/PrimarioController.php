<?php

namespace App\Http\Controllers;

class PrimarioController extends Controller
{
    public function desenv(){

        return view('welcome');
    }

    public function login(){

        return view('login');
    }

    public function home(){

        return view('home');
    }

    public function perfil(){

        return view('perfil');
    }

}