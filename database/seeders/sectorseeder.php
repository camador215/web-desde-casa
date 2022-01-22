<?php

namespace Database\Seeders;
use App\Models\sector; 
use Illuminate\Database\Seeder;

class sectorseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sector = new sector();
        $sector->nombre = "Politica";
        $sector->save();

        $sector2 = new sector();
        $sector2->nombre = "Economía";
        $sector2->save();

        $sector3 = new sector();
        $sector3->nombre = "Sociales";
        $sector3->save();

        $sector4 = new sector();
        $sector4->nombre = "Ciencia";
        $sector4->save();

        $sector5 = new sector();
        $sector5->nombre = "Deportes";
        $sector5->save();

        $sector6 = new sector();
        $sector6->nombre = "Culturales";
        $sector6->save();

        $sector7 = new sector();
        $sector7->nombre = "Farandula";
        $sector7->save();

        $sector8 = new sector();
        $sector8->nombre = "Cientificas";
        $sector8->save();
        
        $sector9 = new sector();
        $sector9->nombre = "Arte";
        $sector9->save();

        $sector10 = new sector();
        $sector10->nombre = "Espectaculo";
        $sector10->save(); 

        $sector12 = new sector();
        $sector12->nombre = "Salud";
        $sector12->save(); 
    }
}
