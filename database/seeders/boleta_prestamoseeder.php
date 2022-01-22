<?php

namespace Database\Seeders;
use App\Models\boleta_prestamo;
use Illuminate\Database\Seeder;

class boleta_prestamoseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bol = new boleta_prestamo();
        $bol->fecha_prestamo = "2022/02/13";
        $bol->fecha_devolucion = "2022/02/14";
        $bol->estado = "1"; 
        $bol->usuario_id = "5";
        $bol->save();
    }
}
