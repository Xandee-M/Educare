<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriaTabelaRespostas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respostas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("pergunta_id");
            $table->unsignedBigInteger("usuario_id");
            $table->text("resposta");
            $table->integer("avaliacao")->nullable();
            $table->string("imagem")->nullable();
            $table->string("data", 200);
            $table->timestamps();
            $table->foreign("usuario_id")->references("id")->on("users")->onDelete("no action")->onUpdate("no action");
            $table->foreign("pergunta_id")->references("id")->on("perguntas")->onDelete("cascade")->onUpdate("no action");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('respostas');
    }
}
