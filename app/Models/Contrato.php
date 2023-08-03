<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\AbstractPaginator;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contrato extends Model
{
     /* Por questão de segurança, o "fillable" é para dizer quais são
       os únicos campos que serão aceitos pelo model. O usuário poderia
       tentar inspecionar e injetar algum campo a mais, lá no front. */

       use SoftDeletes;
       use HasFactory;

         /**
         * The database table used by the model.
         *
         * @var string
         */
         protected $table = 'contratos';

         /**
         * The database primary key value.
         *
         * @var string
         */
         protected $primaryKey = 'id';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cliente', 'cortesia', 'desconto', 'msg_pend_automatica', 'dias_para_pendencia',
        'acrescimo', 'msg_bloqueio_automatica', 'dias_para_bloqueio', 'dia_de_pagamento', 'forma_de_pagamento',
        'modelo_de_contrato'
    ];
}
