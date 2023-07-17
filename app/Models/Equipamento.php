<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipamento extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'equipamentos';

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
    protected $fillable = ['tipodeequipamento', 'user_id', 'notafiscal', 'datanota', 'banda', 'quantidade', 'diametro', 'marca', 'modelo', 'voltagem', 'serial', 'macaddress', 'situacao', 'observacao','unidade'];


}
