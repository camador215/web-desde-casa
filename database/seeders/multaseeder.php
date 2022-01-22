<?php

namespace Database\Seeders;
use App\Models\multa;
use Illuminate\Database\Seeder;

class multaseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mul = new multa();
        $mul->importe = "5";
        $mul->estado = "0"; 
        $mul->boleta_prestamo_id = "1";  
        $mul->save();
    }
}
