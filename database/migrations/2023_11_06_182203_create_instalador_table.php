<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstaladorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instalador', function (Blueprint $table) {
            $table->id();
            $table->string('nome')->nullable();
            $table->string('razao_social')->nullable();
            $table->string('documento')->nullable();
            $table->string('ie_rg')->nullable();
            $table->string('nome_contato')->nullable();
            $table->string('celular')->nullable();
            $table->string('email')->nullable();
            $table->string('telefone')->nullable();
            $table->string('cep')->nullable();
            $table->string('bairro')->nullable();
            $table->string('cidade')->nullable();
            $table->string('estado')->nullable();
            $table->string('observacao')->nullable();
            $table->string('situacao')->nullable();
            $table->string('rua')->nullable();
            $table->string('numero')->nullable();
            $table->date('dataNascimento')->nullable();
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
        Schema::dropIfExists('instalador');
    }
}
