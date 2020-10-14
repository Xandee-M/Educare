<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Perguntas;

class BuscaController extends Controller
{
    public function busca(Request $request){

        $data = $request->busca;
        $resultado = Perguntas::where('titulo', 'LIKE', $data)->get();
      
        return view('site.busca',['resultado' => $resultado]);

        


    }
}
