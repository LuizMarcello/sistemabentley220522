<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquipamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipamentos', function (Blueprint $table) {
            $table->id();
            $table->string('tipodeequipamento', 20);
            $table->string('nome', 30);
            $table->string('notafiscal', 15);
            $table->string('datanota', 10);
            $table->string('banda', 4);
            $table->string('quantidade', 5);
            $table->string('marca', 25);
            $table->string('modelo', 25);
            $table->string('voltagem', 6);
            $table->string('serial', 25);
            $table->string('macaddress', 25);
            $table->string('situacao', 15);
            $table->string('observacao', 50);
            $table->string('unidade', 15);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipamentos');
    }
}
