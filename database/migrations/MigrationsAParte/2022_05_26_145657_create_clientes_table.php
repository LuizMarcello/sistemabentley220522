<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->text('nome_razaosocial', 40)->nullable();
            $table->string('ie_rg', 26);
            $table->string('documento', 25);
            $table->string('inscricaomunicipal', 15)->nullable();
            $table->string('datanascimento', 12);
            $table->string('nome_contato', 30)->nullable();
            $table->string('celular1', 15);
            $table->string('celular2', 15)->nullable();
            $table->string('telefone1', 15);
            $table->string('telefone2', 15)->nullable();
            $table->string('email', 30);
            $table->string('chave', 30)->nullable();
            $table->string('equipamento', 25);
            $table->string('dataadesao', 15);
            $table->string('datacadastro', 15)->nullable();
            $table->string('observacao', 60)->nullable();
            $table->string('cep1', 10);
            $table->string('rua1', 40);
            $table->string('numero1', 8);
            $table->string('bairro1', 35)->nullable();
            $table->string('cidade1', 25);
            $table->string('estado1', 12);
            $table->string('celular11', 12)->nullable();
            $table->string('telefone11', 12)->nullable();
            $table->string('cep2', 8)->nullable();
            $table->string('rua2', 35)->nullable();
            $table->string('numero2', 7)->nullable();
            $table->string('bairro2', 40)->nullable();
            $table->string('cidade2', 30)->nullable();
            $table->string('estado2', 14)->nullable();
            $table->string('celular21', 12)->nullable();
            $table->string('telefone21', 12)->nullable();
            $table->string('cep3', 8)->nullable();
            $table->string('rua3', 30)->nullable();
            $table->string('numero3', 10)->nullable();
            $table->string('bairro3', 35)->nullable();
            $table->string('cidade3', 30)->nullable();
            $table->string('estado3', 12)->nullable();
            $table->string('celular31', 12)->nullable();
            $table->string('telefone31', 12)->nullable();
            $table->string('status', 8);
            $table->string('banda', 6);
            $table->string('formapagamento', 20);
            $table->string('instalador', 30);
            $table->string('distribuidor', 30);
            $table->string('plano', 12);
            $table->string('representante', 25);
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
        Schema::dropIfExists('clientes');
    }
}
