<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoteadorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roteador', function (Blueprint $table) {
            $table->id();
            $table->string('banda')->nullable();
            $table->date('datanota')->nullable();
            $table->string('macaddress')->nullable();
            $table->string('marca')->nullable();
            $table->string('modelo')->nullable();
            $table->string('notafiscal')->nullable();
            $table->string('serial')->nullable();
            $table->string('situacao')->nullable();
            $table->string('observacao')->nullable();
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
        Schema::dropIfExists('roteador');
    }
}
