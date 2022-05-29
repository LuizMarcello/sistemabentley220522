<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFontesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fontes', function (Blueprint $table) {
            $table->id();
            $table->char('banda', 6);
            $table->char('datanota', 10);
            $table->char('marca', 30);
            $table->char('modelo', 30);
            $table->char('notafiscal', 12);
            $table->char('serial', 25);
            $table->char('situacao', 30);
            $table->char('voltagem', 8);
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
        Schema::dropIfExists('fontes');
    }
}
