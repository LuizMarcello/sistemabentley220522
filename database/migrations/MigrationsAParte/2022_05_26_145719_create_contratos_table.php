<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContratosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contratos', function (Blueprint $table) {
            $table->id();
            $table->string('cliente', 25);
            $table->string('cortesia', 25)->nullable();
            $table->string('desconto', 12)->nullable();
            $table->string('msg_pend_automatica', 30)->nullable();
            $table->string('dias_para_pendencia', 10)->nullable();
            $table->string('acrescimo', 12)->nullable();
            $table->string('msg_bloqueio_automatica', 40)->nullable();
            $table->string('dias_para_bloqueio', 12)->nullable();
            $table->string('dia_de_pagamento', 8)->nullable();
            $table->string('forma_de_pagamento', 20)->nullable();
            $table->string('modelo_de_contrato', 20)->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('contratos');
    }
}
