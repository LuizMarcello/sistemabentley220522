<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chamado extends Model
{
    use HasFactory;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'chamados';

    /**
     * The database primary key value.
     *
     * @var string
     */
    protected $primaryKey = 'id';


    protected $fillable = [
        'cliente',
        'categoria',
        'responsavel',
        'agendamento',
        'assunto',
        'mensagem',
        'prioridade',
        'horario',
        'criado_em'
    ];
}
