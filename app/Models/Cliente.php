<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'clientes';

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
        'user_id', 'nome_razaosocial', 'ie_rg', 'documento',
        'inscricaomunicipal', 'datanascimento', 'nome_contato', 'celular1', 'celular2',
        'telefone1', 'telefone2', 'email', 'chave', 'equipamento', 'dataadesao', 'observacao',
        'cep1', 'rua1', 'numero1', 'bairro1', 'cidade1', 'estado1', 'celular11', 'telefone11',
        'cep2', 'rua2', 'numero2', 'bairro2', 'cidade2', 'estado2', 'celular21', 'telefone21',
        'cep3', 'rua3', 'numero3', 'bairro3', 'cidade3', 'estado3', 'celular31', 'telefone31',
        'status', 'banda', 'formapagamento', 'instalador', 'distribuidor', 'plano',
         'representante'
    ];
}
