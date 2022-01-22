<?php

namespace App\Http\Livewire;
use App\Models\sector;
use Livewire\Component;

class SectorController extends Component
{
    public $sectores, $nombre, $sector_id;
    public $modal=false;
    public function render()
    {   
        $this->sectores = sector::all();
        return view('livewire.view-sector');
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
        $this->sector_id='';
    }
    public function editar($id)
    {
        $sector = sector::findOrFail($id); 
        $this->sector_id = $id;
        $this->nombre = $sector->nombre; 
        $this->abrirModal();
    }
    public function borrar($id)
    {
        sector::find($id)->delete();
        session()->flash('message', 'Registro eliminado correctamente');
    }
    public function guardar()
    {
        sector::updateOrCreate(['id'=>$this->sector_id],
            [
                'nombre' => $this->nombre
            ]);
         
         session()->flash('message',
            $this->sector_id ? '¡Actualización exitosa!' : '¡Alta Exitosa!');
         
         $this->cerrarModal();
         $this->limpiarCampos();
    }
}
