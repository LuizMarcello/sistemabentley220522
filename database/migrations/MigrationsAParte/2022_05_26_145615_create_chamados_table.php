<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChamadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chamados', function (Blueprint $table) {
            $table->id();
            $table->string('cliente', 40)->nullable();
            $table->string('categoria', 30)->nullable();
            $table->string('responsavel', 30)->nullable();
            $table->string('agendamento', 60)->nullable();
            $table->string('assunto', 60)->nullable();
            $table->string('mensagem', 70)->nullable();
            $table->string('prioridade', 10)->nullable();
            $table->string('horario', 12)->nullable();
            $table->softdeletes();
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
        Schema::dropIfExists('chamados');
    }
}
