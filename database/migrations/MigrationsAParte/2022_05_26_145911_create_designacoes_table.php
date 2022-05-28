<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDesignacoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('designacoes', function (Blueprint $table) {
            $table->id();
            $table->string('antena', 30);
            $table->string('banda', 8);
            $table->string('buctransmitter', 25);
            $table->string('lnb', 20);
            $table->string('ilnb', 20);
            $table->string('modem', 25);
            $table->string('tria', 25);
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
        Schema::dropIfExists('designacoes');
    }
}
