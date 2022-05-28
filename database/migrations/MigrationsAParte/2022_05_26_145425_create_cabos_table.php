<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCabosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cabos', function (Blueprint $table) {
            $table->id();
            $table->string('datanota', 12);
            $table->string('marca', 25);
            $table->string('metros', 5);
            $table->string('notafiscal', 12);
            $table->string('tipodecabo', 15);
            $table->string('observacao', 60);
            $table->string('situacao', 30);
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
        Schema::dropIfExists('cabos');
    }
}
