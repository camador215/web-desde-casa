<?php

namespace Database\Seeders;
use App\Models\detalle_prestamo;
use Illuminate\Database\Seeder;

class detalle_prestamoseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $detpres = new detalle_prestamo();
        $detpres->boleta_prestamo_id = "1";
        $detpres->equipo_comunicacion_id = "1"; 
        $detpres->save();

        $detpres = new detalle_prestamo();
        $detpres->boleta_prestamo_id = "1";
        $detpres->equipo_comunicacion_id = "2"; 
        $detpres->save();

        $detpres = new detalle_prestamo();
        $detpres->boleta_prestamo_id = "1";
        $detpres->equipo_comunicacion_id = "3"; 
        $detpres->save();
    }
}
