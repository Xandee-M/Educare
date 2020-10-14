<?php

namespace App\Http\Controllers;

use App\User;
use App\Perguntas;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth');
    }

    function getIndex(Request $request, $user_id, $user_slug) {
        $user = User::where('slug', $user_slug)->firstOrFail();
        $pUser = Perguntas::where('usuario_id', $user_id)->orderBy('id','desc')->get();

 
        return view('site.perfil',['user' => $user],['pUser' => $pUser]);
    }
}
