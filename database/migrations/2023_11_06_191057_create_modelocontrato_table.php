<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelocontratoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modelocontrato', function (Blueprint $table) {
            $table->id();
            $table->string('empresa_nome')->nullable();
            $table->string('empresa_e-mail')->nullable();
            $table->string('empresa_cpf_cnpj')->nullable();
            $table->string('empresa_rg_inscricao_estadual')->nullable();
            $table->string('empresa_telefone')->nullable();
            $table->string('empresa_endereco_cep')->nullable();
            $table->string('empresa_endereco_rua')->nullable();
            $table->string('empresa_endereco_numero')->nullable();
            $table->string('empresa_endereco_bairro')->nullable();
            $table->string('empresa_endereco_cidade')->nullable();
            $table->string('empresa_endereco_estado')->nullable();
            $table->string('empresa_endereco_complemento')->nullable();
            $table->string('cliente_nome')->nullable();
            $table->string('cliente_e-mail')->nullable();
            $table->string('cliente_cpf_cnpj')->nullable();
            $table->string('cliente_rg_inscricao_estadual')->nullable();
            $table->date('cliente_data_nascimento')->nullable();
            $table->string('cliente_endereco_cep')->nullable();
            $table->string('cliente_endereco_rua')->nullable();
            $table->string('cliente_endereco_numero')->nullable();
            $table->string('cliente_endereco_bairro')->nullable();
            $table->string('cliente_endereco_cidade')->nullable();
            $table->string('cliente_endereco_estado')->nullable();
            $table->string('cliente_endereco_complemento')->nullable();
            $table->string('contrato_id')->nullable();
            $table->string('contrato_dia_vencimento')->nullable();
            $table->string('contrato_valor')->nullable();
            $table->string('contrato_desconto')->nullable();
            $table->string('contrato_acrescimo')->nullable();
            $table->string('contrato_forma_pagamento')->nullable();
            $table->date('contrato_data_cadastro')->nullable();
            $table->string('autenticacao_login')->nullable();
            $table->string('autenticacao_senha')->nullable();
            $table->string('autenticacao_ip')->nullable();
            $table->string('autenticacao_mac')->nullable();
            $table->string('autenticacao_servidor_nome')->nullable();
            $table->string('autenticacao_plano_nome')->nullable();
            $table->string('autenticacao_plano_valor')->nullable();
            $table->string('cliente_telefone')->nullable();
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
        Schema::dropIfExists('modelocontrato');
    }
}
