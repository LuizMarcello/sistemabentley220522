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
            $table->integer('banda')->nullable();
            $table->integer('datanota')->nullable();
            $table->integer('marca')->nullable();
            $table->integer('modelo')->nullable();
            $table->integer('notafiscal')->nullable();
            $table->integer('diametro')->nullable();
            $table->integer('situacao')->nullable();
            $table->text('observacao')->nullable();
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
