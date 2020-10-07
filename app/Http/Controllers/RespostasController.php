<?php

namespace App\Http\Controllers;

use App\Respostas;
use Illuminate\Http\Request;
use DB;

class RespostasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex(Request $request, $pergunta_id)
    {

        $data =  DB::table('users')
        ->join('perguntas', 'users.id', '=', 'perguntas.usuario_id')
        // ->join('respostas', 'perguntas.id', '=', 'respostas.pergunta_id')
        // ->select('perguntas.*', 'respostas.*')
        ->select('perguntas.*', 'users.*')
        ->where('perguntas.id', $pergunta_id)
        ->get();

  

        return view('site.pergunta',['pergunta' => $data]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Respostas  $respostas
     * @return \Illuminate\Http\Response
     */
    public function show(Respostas $respostas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Respostas  $respostas
     * @return \Illuminate\Http\Response
     */
    public function edit(Respostas $respostas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Respostas  $respostas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Respostas $respostas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Respostas  $respostas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Respostas $respostas)
    {
        //
    }
}
