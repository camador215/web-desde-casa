<?php

namespace App\Http\Livewire;
use App\Models\solicitud_trabajo;
use Livewire\Component;

class SolicitudTrabajoController extends Component
{
    public $solicitudes, $solicitud_id, $nombre, $descripcion, $telefono, $sector_id;
    public $modal=false;
    public function render()
    {   
        $this->solicitudes = solicitud_trabajo::all();
        return view('livewire.view-solicitud-trabajo');
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
        $this->solicitud_id='';
        $this->nombre='';
        $this->descripcion='';
        $this->telefono='';
        $this->sector_id='';

    }
    public function editar($id)
    {
        $solicitud = solicitud_trabajo::findOrFail($id); 
        $this->sector_id = $id;
        $this->nombre = $solicitud->nombre; 

        $this->solicitud_id=$id;
        $this->nombre=      $solicitud->nombre;
        $this->descripcion= $solicitud->descripcion;
        $this->telefono=    $solicitud->telefono;
        $this->sector_id=   $solicitud->sector_id;
        $this->abrirModal();
    }
    public function borrar($id)
    {
        solicitud_trabajo::find($id)->delete();
        session()->flash('message', 'Registro eliminado correctamente');
    }
    public function guardar()
    {
        solicitud_trabajo::updateOrCreate(['id'=>$this->solicitud_id],
            [
                'nombre'        => $this->nombre,
                'descripcion'   => $this->descripcion,
                'telefono'      => $this->telefono,
                'sector_id'     => $this->sector_id,
            ]);
         
         session()->flash('message',
            $this->solicitud_id ? '¡Actualización exitosa!' : '¡Alta Exitosa!');
         
         $this->cerrarModal();
         $this->limpiarCampos();
    }
}
