<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;

class PrimarioController extends Controller
{
    public function home(){

        return view('site.home');
    }

    public function login(){

        return view('site.login');
    }

    public function forum(){

        return view('site.forum');
    }

    public function perfil(){

        return view('site.perfil');
    }


}