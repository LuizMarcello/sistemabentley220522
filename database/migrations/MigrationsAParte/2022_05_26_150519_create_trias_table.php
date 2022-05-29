<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trias', function (Blueprint $table) {
            $table->id();
            $table->string('banda', 8);
            $table->string('datanota', 12);
            $table->string('marca', 30);
            $table->string('macaddress', 25);
            $table->string('modelo', 30);
            $table->string('notafiscal', 25);
            $table->string('serial', 30);
            $table->string('situacao', 20);
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
        Schema::dropIfExists('trias');
    }
}
