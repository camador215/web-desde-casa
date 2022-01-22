<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMultaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('multa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('importe');
            $table->boolean('estado'); 
            $table->unsignedBigInteger('boleta_prestamo_id');
            $table->foreign('boleta_prestamo_id')->references('id')->on('boleta_prestamo')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('multa');
    }
}
