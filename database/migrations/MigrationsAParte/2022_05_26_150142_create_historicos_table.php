<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoricosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historicos', function (Blueprint $table) {
            $table->id();
            $table->string('cliente', 30)->nullable();
            $table->string('descricao', 40)->nullable();
            $table->string('situacao', 35)->nullable();
            $table->text('detalhes', 35)->nullable();
            $table->string('equipamento', 25)->nullable();
            $table->text('pendencias', 30)->nullable();
            $table->string('datainicio', 12)->nullable();
            $table->string('dataencerramento', 12)->nullable();
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
        Schema::dropIfExists('historicos');
    }
}
