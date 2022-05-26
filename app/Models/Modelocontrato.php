<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modelocontrato extends Model
{
    use HasFactory;

     /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'modelocontratos';

    /**
     * The database primary key value.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
       'empresa_nome',
       'empresa_e-mail',
       'empresa_cpf_cnpj',
       'empresa_rg_inscricao_estadual',
       'empresa_telefone',
       'empresa_endereco_cep',
       'empresa_endereco_rua',
       'empresa_endereco_numero',
       'empresa_endereco_bairro',
       'empresa_endereco_cidade',
       'empresa_endereco_estado',
       'empresa_endereco_complemento',
       'cliente_nome',
       'cliente_e-mail',
       'cliente_cpf_cnpj',
       'cliente_rg_inscricao_estadual',
       'cliente_data_nascimento',
       'cliente_endereco_cep',
       'cliente_endereco_rua',
       'cliente_endereco_numero',
       'cliente_endereco_bairro',
       'cliente_endereco_cidade',
       'cliente_endereco_estado',
       'cliente_endereco_complemento',
       'contrato_id',
       'contrato_dia_vencimento',
       'contrato_valor',
       'contrato_desconto',
       'contrato_acrescimo',
       'contrato_forma_pagamento',
       'contrato_data_cadastro',
       'autenticacao_login',
       'autenticacao_senha',
       'autenticacao_ip',
       'autenticacao_mac',
       'autenticacao_servidor_nome',
       'autenticacao_plano_nome',
       'autenticacao_plano_valor',
       'descricao'
    ];
    }
