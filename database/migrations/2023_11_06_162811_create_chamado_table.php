<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChamadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chamado', function (Blueprint $table) {
            $table->id();
            $table->string('cliente');
            $table->string('categoria');
            $table->string('responsavel');
            $table->string('agendamento');
            $table->string('assunto');
            $table->string('mensagem');
            $table->string('prioridade');
            $table->string('horario');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chamado');
    }
}
