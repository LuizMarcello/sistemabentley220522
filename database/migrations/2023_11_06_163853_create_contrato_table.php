<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContratoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contrato', function (Blueprint $table) {
            $table->id();
            $table->string('cliente')->nullable();
            $table->string('cortesia')->nullable();
            $table->string('desconto')->nullable();
            $table->string('msg_pend_automatica')->nullable();
            $table->string('dias_para_pendencia')->nullable();
            $table->string('acrescimo')->nullable();
            $table->string('msg_bloqueio_automatica')->nullable();
            $table->string('dias_para_bloqueio')->nullable();
            $table->string('dia_de_pagamento')->nullable();
            $table->string('forma_de_pagamento')->nullable();
            $table->string('modelo_de_contrato')->nullable();
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
        Schema::dropIfExists('contrato');
    }
}
