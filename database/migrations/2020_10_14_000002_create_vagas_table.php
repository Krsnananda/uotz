<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVagasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vagas', function (Blueprint $table) {
            $table->id();
            $table->string('nome_vaga');
            $table->string('pais');
            $table->string('cidade');
            $table->string('estado');
            $table->string('departamento');
            $table->string('tipo');
            $table->longText('descricao');
            $table->boolean('remoto')->nullable();
            $table->date('created_at', 0);
            $table->datetime('updated_at', 0)->nullable();
            $table->softDeletes('deleted_at');

        });
        Schema::table('vagas', function(Blueprint $table) {
          $table->foreignId('autor_id')->constrained('autores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('password_resets');
    }
}
