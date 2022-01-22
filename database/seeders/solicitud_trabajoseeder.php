<?php

namespace Database\Seeders;
use App\Models\solicitud_trabajo; 
use Illuminate\Database\Seeder;

class solicitud_trabajoseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sol = new solicitud_trabajo();
        $sol->nombre = "Amador Jorge Carlos Alberto";
        $sol->descripcion = "Quisiera postularme para camarografo";
        $sol->telefono = "79495600";
        $sol->sector_id = "1"; 
        $sol->save();

        $sol2 = new solicitud_trabajo();
        $sol2->nombre = "Andela Lopez Andres";
        $sol2->descripcion = "Quisiera postularme para reportero";
        $sol2->telefono = "74197034";
        $sol2->sector_id = "5"; 
        $sol2->save();

        $sol3 = new solicitud_trabajo();
        $sol3->nombre = "Encinas Garrido Pedro Luis";
        $sol3->descripcion = "Quisiera postularme para presentador";
        $sol3->telefono = "61318433";
        $sol3->sector_id = "2"; 
        $sol3->save();

        $sol4 = new solicitud_trabajo();
        $sol4->nombre = "Arce Gallardo Raul";
        $sol4->descripcion = "Quisiera postularme para camarografo";
        $sol4->telefono = "62134752";
        $sol4->sector_id = "7"; 
        $sol4->save();

        $sol5 = new solicitud_trabajo();
        $sol5->nombre = "Tomas Gomez Luis";
        $sol5->descripcion = "Quisiera postularme para presentador";
        $sol5->telefono = "71332148";
        $sol5->sector_id = "9"; 
        $sol5->save();

        $sol6 = new solicitud_trabajo();
        $sol6->nombre = "Martin Jimenez Oscar";
        $sol6->descripcion = "Quisiera postularme para reportero";
        $sol6->telefono = "61466975";
        $sol6->sector_id = "6"; 
        $sol6->save();

        $sol7 = new solicitud_trabajo();
        $sol7->nombre = "Perez Tamara Jose Luis";
        $sol7->descripcion = "Quisiera postularme para Editor de Video";
        $sol7->telefono = "71153254";
        $sol7->sector_id = "10"; 
        $sol7->save();
    }
}
