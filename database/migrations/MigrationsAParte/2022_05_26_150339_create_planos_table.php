<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planos', function (Blueprint $table) {
            $table->id();
            $table->char('banda');
            $table->string('cir');
            $table->string('equipamento');
            $table->string('nome');
            $table->string('valor');
            $table->string('valordecusto');
            $table->string('valormensal');
            $table->string('velocmaxdown');
            $table->string('velocmaxup');
            $table->string('velocmindown');
            $table->string('velocminup');
            $table->string('observacao');
            $table->string('situacao');
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
        Schema::dropIfExists('planos');
    }
}
