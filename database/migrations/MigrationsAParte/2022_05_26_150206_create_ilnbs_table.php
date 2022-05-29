<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIlnbsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ilnbs', function (Blueprint $table) {
            $table->id();
            $table->char('banda', 6);
            $table->string('datanota', 12);
            $table->string('marca', 30);
            $table->string('modelo', 30);
            $table->string('notafiscal', 12);
            $table->string('serial', 25);
            $table->string('situacao', 30);
            $table->string('observacao', 40);
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
        Schema::dropIfExists('ilnbs');
    }
}
