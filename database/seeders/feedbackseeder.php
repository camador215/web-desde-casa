<?php

namespace Database\Seeders;
use App\Models\feedback;
use Illuminate\Database\Seeder;

class feedbackseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fee = new feedback();
        $fee->comentario = "buena noticia";
        $fee->calificacion = "5"; 
        $fee->noticia_id = "1"; 
        $fee->usuario_id = "4"; 
        $fee->save();
    }
}
