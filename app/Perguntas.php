<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perguntas extends Model
{
    protected $fillable = [
        'titulo', 'pergunta', 'data', 'usuario_id', 'avaliacao', 'imagem', 'id',
    ];

    public function escritor(){

        return $this->belongsTo('App\User', 'usuario_id');
    }
     public function respostas(){

       return $this->hasMany('App\Respostas', 'pergunta_id');
     }
}
