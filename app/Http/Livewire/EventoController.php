<?php

namespace App\Http\Livewire;
use App\Models\evento;
use Livewire\Component;

class EventoController extends Component
{
    public $eventos, $evento_id, $nombre, $fecha_inicio, $fecha_fin, $lugar, $comision, $estado, $sector_id;
    public $modal=false;
    public function render()
    {   
        $this->eventos = evento::all();
        return view('livewire.view-evento');
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
        $this->fecha_inicio='';
        $this->fecha_fin=''; 
        $this->lugar=''; 
        $this->comision=''; 
        $this->estado=''; 
        $this->sector_id=''; 
        $this->evento_id=''; 
    }
    public function editar($id)
    {
        $evento = evento::findOrFail($id); 
        $this->evento_id =       $id;
        $this->nombre =          $evento->nombre; 
        $this->fecha_inicio =    $evento->fecha_inicio; 
        $this->fecha_fin =       $evento->fecha_fin;  
        $this->lugar =           $evento->lugar;  
        $this->comision =        $evento->comision;  
        $this->estado =          $evento->estado;  
        $this->sector_id =       $evento->sector_id;    
        $this->abrirModal();
    }
    public function borrar($id)
    {
        evento::find($id)->delete();
        session()->flash('message', 'Registro eliminado correctamente');
    }
    public function guardar()
    {
        evento::updateOrCreate(['id'=>$this->evento_id],
            [
                'nombre'        => $this->nombre,
                'fecha_inicio'  => $this->fecha_inicio,
                'fecha_fin'     => $this->fecha_fin,
                'lugar'         => $this->lugar,
                'comision'      => $this->comision,
                'estado'        => $this->estado,
                'sector_id'     => $this->sector_id

            ]);
         
         session()->flash('message',
            $this->evento_id ? '¡Actualización exitosa!' : '¡Alta Exitosa!');
         
         $this->cerrarModal();
         $this->limpiarCampos();
    }
}
