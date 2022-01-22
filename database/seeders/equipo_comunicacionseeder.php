<?php

namespace Database\Seeders;
use App\Models\equipo_comunicacion;
use Illuminate\Database\Seeder;

class equipo_comunicacionseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $eq = new equipo_comunicacion();
        $eq->nombre = "Cámara Nikon Coolpix W100 Wiffi de 13.2 MP";
        $eq->estado = "0"; 
        $eq->save();

        $eq1 = new equipo_comunicacion();
        $eq1->nombre = "Cámara Canon Réflex Profesional EOS Rebel T7i";
        $eq1->estado = "0"; 
        $eq1->save();

        $eq2 = new equipo_comunicacion();
        $eq2->nombre = "Cámara Canon EOS 2000D DSLR Camera Body - Black";
        $eq2->estado = "0"; 
        $eq2->save();

        $eq3 = new equipo_comunicacion();
        $eq3->nombre = "Microfono Electro-Voice RE50/B";
        $eq3->estado = "0"; 
        $eq3->save();

        $eq4 = new equipo_comunicacion();
        $eq4->nombre = "Microfono Sennheiser MD 46";
        $eq4->estado = "0"; 
        $eq4->save();
    }
}
