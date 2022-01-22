<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evento', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->date('fecha_inicio'); 
            $table->date('fecha_fin'); 
            $table->string('lugar');
            $table->integer('comision');
            $table->boolean('estado');

            $table->unsignedBigInteger('sector_id');
            $table->foreign('sector_id')->references('id')->on('sector')->onDelete('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evento');
    }
}
