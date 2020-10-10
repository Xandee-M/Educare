<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Respostas extends Model
{

  protected $fillable = [
    'pergunta_id', 'usuario_id', 'resposta', 'data', 'avaliacao', 'imagem',
  ];

  public function teste(){

    return $this->belongsTo('App\Perguntas', 'pergunta_id');
  }

  public function escritor(){

    return $this->belongsTo('App\User', 'usuario_id');
}
}
