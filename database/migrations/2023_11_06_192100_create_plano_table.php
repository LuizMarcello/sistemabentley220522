<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plano', function (Blueprint $table) {
            $table->id();
            $table->string('banda')->nullable();
            $table->string('cir')->nullable();
            $table->string('equipamento')->nullable();
            $table->string('nome')->nullable();
            $table->string('situacao')->nullable();
            $table->string('valor')->nullable();
            $table->string('valordecusto')->nullable();
            $table->string('valormensal')->nullable();
            $table->string('velocmaxdown')->nullable();
            $table->string('velocmaxup')->nullable();
            $table->string('velocmindown')->nullable();
            $table->string('velocminup')->nullable();
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
        Schema::dropIfExists('plano');
    }
}
