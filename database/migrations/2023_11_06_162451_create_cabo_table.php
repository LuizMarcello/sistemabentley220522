<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaboTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cabo', function (Blueprint $table) {
            $table->id();
            $table->string('datanota');
            $table->string('marca');
            $table->string('notafiscal');
            $table->string('situacao');
            $table->string('metros');
            $table->string('tipodecabo');
            $table->text('observacao');
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
        Schema::dropIfExists('cabo');
    }
}
