<?php

namespace Database\Seeders;
use App\Models\evento; 
use Illuminate\Database\Seeder;

class eventoseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $eve = new evento();
        $eve->nombre = "Fexpocruz Stand Bolivia";
        $eve->fecha_inicio = "2022/09/24";
        $eve->fecha_fin = "2022/09/26";
        $eve->lugar = "Fexpocruz";
        $eve->comision = "350";
        $eve->estado = "1";
        $eve->sector_id = "1"; 
        $eve->save();

        $eve1 = new evento();
        $eve1->nombre = "Apertura del Puente Urubo";
        $eve1->fecha_inicio = "2022/02/01";
        $eve1->fecha_fin = "2022/02/02";
        $eve1->lugar = "Urubo";
        $eve1->comision = "250";
        $eve1->estado = "1";
        $eve1->sector_id = "2"; 
        $eve1->save();

    }
}
