<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned();
            $table->string('nome_razaosocial')->nullable();
            $table->string('ie_rg')->nullable();
            $table->string('cpf')->nullable();
            $table->string('cnpj')->nullable();
            $table->string('inscricaomunicipal')->nullable();
            $table->string('nome_contato')->nullable();
            $table->string('celular1')->nullable();
            $table->string('telefone1')->nullable();
            $table->string('email')->nullable();
            $table->string('chave')->nullable();
            $table->string('observacao')->nullable();
            $table->string('cep1')->nullable();
            $table->string('rua1')->nullable();
            $table->string('numero1')->nullable();
            $table->string('bairro1')->nullable();
            $table->string('cidade')->nullable();
            $table->string('estado1')->nullable();
            $table->string('status')->nullable();
            $table->string('formapagamento')->nullable();
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
        Schema::dropIfExists('cliente');
    }
}
