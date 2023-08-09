<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\AbstractPaginator;
use Illuminate\Database\Eloquent\SoftDeletes;

class Designacao extends Model
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
    protected $table = 'designacoes';

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
    protected $fillable = ['banda', 'modem', 'antena', 'lnb', 'buctransmitter', 'ilnb', 'tria'];



}
