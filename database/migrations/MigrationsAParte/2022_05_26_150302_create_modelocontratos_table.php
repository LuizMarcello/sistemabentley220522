<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelocontratosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modelocontratos', function (Blueprint $table) {
            $table->id();
            $table->string('empresa_nome', 30)->nullable();
            $table->string('empresa_e-mail', 30)->nullable();
            $table->string('empresa_cpf_cnpj', 15)->nullable();
            $table->string('empresa_rg_inscricao_estadual', 12)->nullable();
            $table->string('empresa_telefone', 15)->nullable();
            $table->string('empresa_endereco_cep', 12)->nullable();
            $table->string('empresa_endereco_rua', 30)->nullable();
            $table->string('empresa_endereco_numero', 10)->nullable();
            $table->string('empresa_endereco_bairro', 25)->nullable();
            $table->string('empresa_endereco_cidade', 30)->nullable();
            $table->string('empresa_endereco_estado', 20)->nullable();
            $table->string('empresa_endereco_complemento', 25)->nullable();
            $table->string('cliente_nome', 30)->nullable();
            $table->string('cliente_e-mail', 30)->nullable();
            $table->string('cliente_cpf_cnpj', 12)->nullable();
            $table->string('cliente_rg_inscricao_estadual', 15)->nullable();
            $table->string('cliente_telefone', 15)->nullable();
            $table->string('cliente_data_nascimento', 12)->nullable();
            $table->string('cliente_endereco_cep', 12)->nullable();
            $table->string('cliente_endereco_rua', 30)->nullable();
            $table->string('cliente_endereco_numero', 10)->nullable();
            $table->string('cliente_endereco_bairro', 30)->nullable();
            $table->string('cliente_endereco_cidade', 25)->nullable();
            $table->string('cliente_endereco_estado', 15)->nullable();
            $table->string('cliente_endereco_complemento', 30)->nullable();
            $table->string('contrato_id', 10)->nullable();
            $table->string('contrato_dia_vencimento', 15)->nullable();
            $table->string('contrato_valor', 15)->nullable();
            $table->string('contrato_desconto', 25)->nullable();
            $table->string('contrato_acrescimo', 30)->nullable();
            $table->string('contrato_forma_pagamento', 35)->nullable();
            $table->string('contrato_data_cadastro', 12)->nullable();
            $table->string('autenticacao_login', 25)->nullable();
            $table->string('autenticacao_senha', 30)->nullable();
            $table->string('autenticacao_ip', 15)->nullable();
            $table->string('autenticacao_mac', 25)->nullable();
            $table->string('autenticacao_servidor_nome', 40)->nullable();
            $table->string('autenticacao_plano_nome', 30)->nullable();
            $table->string('autenticacao_plano_valor', 30)->nullable();
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
        Schema::dropIfExists('modelocontratos');
    }
}
