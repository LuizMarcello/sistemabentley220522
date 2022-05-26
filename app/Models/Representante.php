<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\AbstractPaginator;
use Illuminate\Database\Eloquent\SoftDeletes;

class Representante extends Model
{
    /* Por questão de segurança, o "fillable" é para dizer quais são
       os únicos campos que serão aceitos pelo model. O usuário poderia
       tentar inspecionar e injetar algum campo a mais, lá no front. */

    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome', 'razao_social', 'documento', 'ie_rg', 'nome_contato', 'celular',
        'email', 'telefone', 'cep', 'bairro', 'cidade', 'estado',
        'observacao', 'tipo', 'situacao', 'numero', 'rua'
    ];
}
