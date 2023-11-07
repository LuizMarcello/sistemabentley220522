<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDesignacaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('designacao', function (Blueprint $table) {
            $table->id();
            $table->string('banda')->nullable();
            $table->string('modem')->nullable();
            $table->string('antena')->nullable();
            $table->string('lnb')->nullable();
            $table->string('buctransmitter')->nullable();
            $table->string('ilnb')->nullable();
            $table->string('tria')->nullable();
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
        Schema::dropIfExists('designacao');
    }
}
