<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoteadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roteadores', function (Blueprint $table) {
            $table->id();
            $table->char('banda', 8);
            $table->char('datanota', 12);
            $table->string('marca', 30);
            $table->string('macaddress', 25);
            $table->string('modelo', 40);
            $table->string('notafiscal', 25);
            $table->string('serial', 25);
            $table->string('situacao', 60);
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
        Schema::dropIfExists('roteadores');
    }
}
