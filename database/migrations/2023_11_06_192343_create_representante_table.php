<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepresentanteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('representante', function (Blueprint $table) {
            $table->id();
            $table->string('responsável')->nullable();
            $table->string('razao_social')->nullable();
            $table->string('documento')->nullable();
            $table->string('ie_rg')->nullable();
            $table->string('estado')->nullable();
            $table->string('celular')->nullable();
            $table->string('email')->nullable();
            $table->string('telefone')->nullable();
            $table->string('cep')->nullable();
            $table->string('bairro')->nullable();
            $table->string('cidade')->nullable();
            $table->text('observacao')->nullable();
            $table->string('situacao')->nullable();
            $table->string('numero')->nullable();
            $table->string('rua')->nullable();
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
        Schema::dropIfExists('representante');
    }
}
