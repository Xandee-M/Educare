<?php

namespace App\Http\Controllers;

use App\Perguntas;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use DB;
class PerguntasController extends Controller
{
    public function getIndex(Request $request){
        $idlogado = Auth::user()->id;
        $duvidas = Perguntas::orderBy('id','desc')->paginate(2);
        $user = User::where('id', $idlogado)->get();
        if ($request->ajax()) {
    		$view = view('site.posts',compact('duvidas'))->render();
            return response()->json(['html'=>$view]);
        };

        return view('site.forum',compact('duvidas'),['user' => $user]);

    }

    public function create(){      

    }

    public function save(Request $request){
      try{
        setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
        date_default_timezone_set('America/Sao_Paulo');

        $dia = strftime("%e de %b as %H:%M");
        
        $userid = Auth::id();
      
        $dataDetail = array(

            'titulo' => $request->titulo,
            'pergunta' => $request->pergunta,
            'data' => $dia,
            'usuario_id' => $userid,
        );

        $detail = new Perguntas();
        $detail->fill($dataDetail);
        $detail->save();

        return response()->json([
            'text'   => 'Obrigado por nos contatar, assim que possível retornaremos seu contato.',
        ], 200);
      } catch (Exception $e){
        return response()->json(["erro"=> $e]);
      }
    }
}
