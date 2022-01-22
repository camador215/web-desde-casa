<?php

namespace Database\Seeders;
use App\Models\noticia;  
use Illuminate\Database\Seeder;

class noticiaseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $not = new noticia();
        $not->titulo = "¿Como afecta la covid a los equipos y deportistas vascos en 2022?";
        $not->fecha = "2022/02/01";
        $not->contenido = "Los positivos por coronavirus están repercutiendo en el normal funcionamiento de las competiciones deportivas en las que están presentes nuestros representantes."; 
        $not->sector_id = "11";
        $not->usuario_id = "5"; 
        $not->save();

        $not2 = new noticia();
        $not2->titulo = "Los cientificos piden cero capturas de angula para salvar la especie";
        $not2->fecha = "2022/02/01";
        $not2->contenido = "El 31 de enero termina la campaña de la pesca de la angula. Este año se han repartido 800 licencias para este tipo de pesca en Euskadi pero los científicos alertan que la angula en todo el planeta está en peligro de extinción y piden 0 capturas."; 
        $not2->sector_id = "11";
        $not2->usuario_id = "5"; 
        $not2->save();
    }
}
