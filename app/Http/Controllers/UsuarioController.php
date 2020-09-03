<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth');
    }

    function getIndex(Request $request, $user_slug) {
        $user = User::where('slug', $user_slug)->firstOrFail();
        return view('site.perfil', ['user' => $user]);
    }
}
