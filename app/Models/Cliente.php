<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\AbstractPaginator;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cliente extends Model
{
    use SoftDeletes;
    use HasFactory;

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
        'user_id', 'nome_razaosocial', 'ie_rg', 'cpf', 'cnpj',
        'inscricaomunicipal', 'nome_contato', 'celular1','nome_contato',
        'telefone1', 'email', 'chave', 'observacao',
        'cep1', 'rua1', 'numero1', 'bairro1', 'cidade', 'estado1',
        'status', 'formapagamento'
    ];
}
