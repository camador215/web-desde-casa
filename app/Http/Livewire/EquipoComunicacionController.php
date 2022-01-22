<?php

namespace App\Http\Livewire;
use App\Models\equipo_comunicacion;
use Livewire\Component;

class EquipoComunicacionController extends Component
{
    public $equipos, $equipo_id, $nombre, $estado;
    public $modal=false;
    public function render()
    {   
        $this->equipos = equipo_comunicacion::all();
        return view('livewire.view-equipo-comunicacion');
    }
    public function crear()
    {
        $this->limpiarCampos();
        $this->abrirModal(); 
    }
    public function abrirModal()
    {
        $this->modal=true;
    }
    public function cerrarModal()
    {
        $this->modal=false;
    }
    public function limpiarCampos()
    {
        $this->nombre='';
        $this->estado=''; 
        $this->equipo_id=''; 
    }
    public function editar($id)
    {
        $equipo = equipo_comunicacion::findOrFail($id); 
        $this->equipo_id =         $id;
        $this->nombre =            $equipo->nombre; 
        $this->estado =            $equipo->estado;  
        $this->abrirModal();
    }
    public function borrar($id)
    {
        equipo_comunicacion::find($id)->delete();
        session()->flash('message', 'Registro eliminado correctamente');
    }
    public function guardar()
    {
        equipo_comunicacion::updateOrCreate(['id'=>$this->equipo_id],
            [
                'nombre' => $this->nombre,
                'estado' => $this->estado
            ]);
         
         session()->flash('message',
            $this->equipo_id ? '¡Actualización exitosa!' : '¡Alta Exitosa!');
         
         $this->cerrarModal();
         $this->limpiarCampos();
    }
}
