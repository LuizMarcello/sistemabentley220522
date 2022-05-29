<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modens', function (Blueprint $table) {
            $table->id();
            $table->char('banda');
            $table->string('datanota');
            $table->string('marca');
            $table->string('macaddress');
            $table->string('modelo');
            $table->string('notafiscal');
            $table->string('serial');
            $table->string('situacao');
            $table->string('observacao');
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
        Schema::dropIfExists('modens');
    }
}
