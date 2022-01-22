<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoticiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noticia', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo');
            $table->date('fecha'); 
            $table->longText('contenido',255); 

            $table->unsignedBigInteger('sector_id');
            $table->foreign('sector_id')->references('id')->on('sector')->onDelete('cascade');

            $table->unsignedBigInteger('usuario_id');
            $table->foreign('usuario_id')->references('id')->on('usuario')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('noticia');
    }
}
