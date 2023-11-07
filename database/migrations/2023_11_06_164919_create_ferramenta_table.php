<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFerramentaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ferramenta', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->string('tipoferramenta')->nullable();
            $table->string('tipoinstrumento')->nullable();
            $table->string('controle')->nullable();
            $table->string('categoria')->nullable();
            $table->string('unidademedida')->nullable();
            $table->string('medida')->nullable();
            $table->string('descricao')->nullable();
            $table->string('situacao')->nullable();
            $table->string('desde')->nullable();
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
        Schema::dropIfExists('ferramenta');
    }
}
