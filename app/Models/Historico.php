<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historico extends Model
{
    use HasFactory;

    /*
    * The attributes that are mass assignable.
     *
     * Por questão de segurança, o "fillable" é para dizer quais são
     * os únicos campos que serão aceitos pelo model. O usuário poderia
     * tentar inspecionar e injetar algum campo a mais, lá no front.
     *
     * @var array
     */
    protected $fillable = [
        'cliente', 'descricao', 'detalhes', 'equipamento', 'pendencias', 'datainicio', 'dataencerramento'
    ];
}
