<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstaladoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instaladores', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 30);
            $table->string('razao_social', 30);
            $table->string('documento', 15);
            $table->string('ie_rg', 15);
            $table->string('nome_contato', 30);
            $table->string('celular', 15);
            $table->string('email', 35);
            $table->string('telefone', 15);
            $table->string('cep', 12);
            $table->string('rua', 40);
            $table->string('numero', 10);
            $table->string('bairro', 35);
            $table->string('cidade', 25);
            $table->string('estado', 10);
            $table->string('observacao', 50);
            $table->string('situacao', 25);
            $table->string('dataNascimento', 15);
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
        Schema::dropIfExists('instaladores');
    }
}
