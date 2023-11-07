<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tria', function (Blueprint $table) {
            $table->id();
            $table->string('banda')->nullable();
            $table->date('datanota')->nullable();
            $table->string('macaddress')->nullable();
            $table->string('marca')->nullable();
            $table->string('modelo')->nullable();
            $table->string('serial')->nullable();
            $table->string('situacao')->nullable();
            $table->text('observacao')->nullable();
            $table->string('notafiscal')->nullable();
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
        Schema::dropIfExists('tria');
    }
}
