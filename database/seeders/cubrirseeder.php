<?php

namespace Database\Seeders;
use App\Models\cubrir; 
use Illuminate\Database\Seeder;

class cubrirseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cub = new cubrir();
        $cub->usuario_id = "1";
        $cub->evento_id = "1";
        $cub->save();

        $cub2 = new cubrir();
        $cub2->usuario_id = "2";
        $cub2->evento_id = "1";
        $cub2->save();

        $cub3 = new cubrir();
        $cub3->usuario_id = "3";
        $cub3->evento_id = "2";
        $cub3->save();

        $cub4 = new cubrir();
        $cub4->usuario_id = "4";
        $cub4->evento_id = "2";
        $cub4->save(); 
    }
}
