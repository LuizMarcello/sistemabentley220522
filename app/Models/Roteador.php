<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\AbstractPaginator;
use Illuminate\Database\Eloquent\SoftDeletes;

class Roteador extends Model
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
   protected $table = 'roteadores';

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
        'banda', 'datanota', 'macaddress', 'marca', 'modelo', 'notafiscal',
        'serial', 'situacao', 'observacao'
    ];
}
