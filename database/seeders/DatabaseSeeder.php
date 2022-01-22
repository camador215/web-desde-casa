<?php

namespace Database\Seeders;
use App\Models\solicitud_trabajo; 
use App\Models\rol; 
use App\Models\sector; 
use App\Models\evento; 
use App\Models\usuario; 
use App\Models\cubrir; 
use App\Models\noticia; 
use App\Models\feedback; 
use App\Models\multa; 
use App\Models\boleta_prestamo; 
use App\Models\equipo_comunicacion; 
use App\Models\detalle_prestamo; 

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(rolseeder::class);
        $this->call(sectorseeder::class);
        $this->call(solicitud_trabajoseeder::class);
        $this->call(eventoseeder::class);
        $this->call(usuarioseeder::class);
        $this->call(cubrirseeder::class);
        $this->call(noticiaseeder::class);
        $this->call(feedbackseeder::class);
        $this->call(boleta_prestamoseeder::class);
        $this->call(multaseeder::class);
        $this->call(equipo_comunicacionseeder::class);
        $this->call(detalle_prestamoseeder::class);
    }
}
