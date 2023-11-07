<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoricoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historico', function (Blueprint $table) {
            $table->id();
            $table->string('cliente')->nullable();
            $table->text('descricao')->nullable();
            $table->string('detalhes')->nullable();
            $table->string('equipamento')->nullable();
            $table->string('pendencias')->nullable();
            $table->date('datainicio')->nullable();
            $table->date('dataencerramento')->nullable();
            $table->string('situacao')->nullable();
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
        Schema::dropIfExists('historico');
    }
}
