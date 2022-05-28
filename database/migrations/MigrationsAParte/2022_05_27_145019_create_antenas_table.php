<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAntenasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('antenas', function (Blueprint $table) {
            $table->id();
            $table->char('banda');
            $table->string('datanota', 20);
            $table->string('diametro', 5);
            $table->string('marca', 30);
            $table->string('modelo', 40);
            $table->string('notafiscal', 12);
            $table->string('situacao', 30);
            $table->string('observacao', 60);
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
        Schema::dropIfExists('antenas');
    }
}
