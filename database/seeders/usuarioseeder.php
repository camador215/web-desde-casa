<?php

namespace Database\Seeders;
use App\Models\usuario; 
use Illuminate\Database\Seeder;

class usuarioseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usu = new usuario();
        $usu->nombre = "Amador Jorge Carlos Alberto";
        $usu->correo = "camador215@gmail.com";
        $usu->contrasena = "cam2412";
        $usu->rol_id = "1"; 
        $usu->save();

        $usu = new usuario();
        $usu->nombre = "Rodriguez Salazar Oscar Alejandro";
        $usu->correo = "oscarsalazar@gmail.com";
        $usu->contrasena = "osca414";
        $usu->rol_id = "1"; 
        $usu->save();

        $usu = new usuario();
        $usu->nombre = "Sausa Rivera Elda Dania";
        $usu->correo = "eldadania@gmail.com";
        $usu->contrasena = "eld9481";
        $usu->rol_id = "1"; 
        $usu->save();

        $usu = new usuario();
        $usu->nombre = "Angulo Banzer Sergio Cesar";
        $usu->correo = "angusergio@gmail.com";
        $usu->contrasena = "banzezar16";
        $usu->rol_id = "2"; 
        $usu->save();

        $usu = new usuario();
        $usu->nombre = "Condori Escalera Yordi";
        $usu->correo = "jordienp@gmail.com";
        $usu->contrasena = "escayord4";
        $usu->rol_id = "3"; 
        $usu->save();

        $usu = new usuario();
        $usu->nombre = "Cerezo Calderon Margarita";
        $usu->correo = "maguicalderon@gmail.com";
        $usu->contrasena = "cereza894";
        $usu->rol_id = "4"; 
        $usu->save();
    }
}
