<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Respostas extends Model
{
  public function pergunta(){

    return $this->belongsTo('App\Perguntas');
  }
}
