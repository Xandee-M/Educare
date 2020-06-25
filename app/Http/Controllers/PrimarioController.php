<?php

namespace App\Http\Controllers;

class PrimarioController extends Controller
{
    public function home(){

        return view('home');
    }

    public function login(){

        return view('login');
    }

    public function forum(){

        return view('forum');
    }

    public function perfil(){

        return view('perfil');
    }

}