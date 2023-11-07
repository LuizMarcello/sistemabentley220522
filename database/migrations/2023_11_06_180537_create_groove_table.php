<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGrooveTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groove', function (Blueprint $table) {
            $table->id();
            $table->string('banda')->nullable();
            $table->string('datanota')->nullable();
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
        Schema::dropIfExists('groove');
    }
}
