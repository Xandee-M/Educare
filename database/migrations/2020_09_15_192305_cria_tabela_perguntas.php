<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriaTabelaPerguntas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perguntas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("usuario_id");
            $table->string("titulo", 200);
            $table->text("pergunta");
            $table->integer("avaliacao")->nullable();
            $table->string("imagem")->nullable();
            $table->string("data", 200);
            $table->timestamps();
            $table->foreign("usuario_id")->references("id")->on("users")->onDelete("no action")->onUpdate("no action");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perguntas');
    }
}
