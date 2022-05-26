<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
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
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
       'cliente',
       'cortesia',
       'desconto',
       'msg_pend_automatica',
       'dias_para_pendencia',
       'acrescimo',
       'msg_bloqueio_automatica',
       'dias_para_bloqueio',
       'dia_de_pagamento',
       'forma_de_pagamento',
       'modelo_de_contrato',
       'vencimento',
       'valor',
       'criado_em'
    ];
}




