<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidaturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidaturas', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('sobrenome');
            $table->string('email')->unique();
            $table->string('telefone')->unique();
            $table->string('curriculo');
            $table->longText('detalhes');
            $table->text('referencia');
            $table->timestamps('sent_at');
            $table->unsignedBigInteger('vaga_id');

            $table->foreign('vaga_id')->references('id')->on('vagas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidaturas');
    }
}
