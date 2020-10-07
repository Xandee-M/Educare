<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perguntas extends Model
{
    protected $fillable = [
        'titulo', 'pergunta', 'data', 'usuario_id', 'avaliacao', 'imagem',
    ];


}
