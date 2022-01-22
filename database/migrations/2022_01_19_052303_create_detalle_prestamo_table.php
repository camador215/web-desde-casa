<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetallePrestamoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_prestamo', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('boleta_prestamo_id');
            $table->foreign('boleta_prestamo_id')->references('id')->on('boleta_prestamo')->onDelete('cascade');
            $table->unsignedBigInteger('equipo_comunicacion_id');
            $table->foreign('equipo_comunicacion_id')->references('id')->on('equipo_comunicacion')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_prestamo');
    }
}
