<?php

namespace App\Http\Controllers;

use App\Respostas;
use App\Perguntas;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use DB;

class RespostasController extends Controller
{
    public function getIndex(Request $request, $pergunta_id){

        $pergunta = Perguntas::select('perguntas.*')->where('perguntas.id', $pergunta_id)->get();
        $respostas = Respostas::select('*')->where('pergunta_id', $pergunta_id)->get();

    
        return view('site.pergunta',['pergunta' => $pergunta],['resposta' => $respostas]);
    }

    public function responder(Request $request){
        try{
          setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
          date_default_timezone_set('America/Sao_Paulo');


          $dia = strftime("%e de %b as %H:%M");
          $data = $request->all();
          $userid = Auth::id();
          $dataDetail = array(
  
              'resposta' => $data['resposta'],
              'data' => $dia,
              'usuario_id' => $userid,
              'pergunta_id' => $data['perguntaid'],
          );
  
          $detail = new Respostas();
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
