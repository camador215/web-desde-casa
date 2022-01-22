<?php

namespace Database\Seeders;
use App\Models\rol; 
use Illuminate\Database\Seeder;

class rolseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rol = new rol();
        $rol->nombre = "Administrador";
        $rol->save();

        $rol2 = new rol();
        $rol2->nombre = "Cliente";
        $rol2->save();

        $rol4 = new rol();
        $rol4->nombre = "Presentador";
        $rol4->save();

        $rol5 = new rol();
        $rol5->nombre = "Empresa";
        $rol5->save();
    }
}
