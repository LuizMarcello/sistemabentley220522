<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstaladorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instaladors', function (Blueprint $table) {
            $table->id();
            $table->integer('nome');
            $table->string('razao_social');
            $table->string('documento');
            $table->string('ie_rg');
            $table->string('nome_contato');
            /* $table->text('Descricao')->nullable(); */
            $table->string('celular');
            $table->string('situacao');
            $table->text('observacao')->nullable();
            $table->string('telefone');
            $table->string('cep');
            $table->string('bairro');
            $table->string('cidade');
            $table->string('estado');
            $table->string('email');
            $table->string('rua');
            $table->string('numero');
            $table->string('dataNascimento');
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
        Schema::dropIfExists('instaladors');
    }
}
