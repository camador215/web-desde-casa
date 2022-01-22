<?php

namespace App\Http\Livewire;
use App\Models\boleta_prestamo;
use Livewire\Component;

class BoletaPrestamoController extends Component
{
    public $boletas, $boleta_id, $fecha_prestamo, $fecha_devolucion, $estado, $usuario_id;
    public $modal=false;
    public function render()
    {   
        $this->boletas = boleta_prestamo::all();
        return view('livewire.view-boleta-prestamo');
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
        $this->fecha_prestamo='';
        $this->fecha_devolucion=''; 
        $this->estado=''; 
        $this->usuario_id='';
        $this->boleta_id='';
    }
    public function editar($id)
    {
        $boleta = boleta_prestamo::findOrFail($id); 
        $this->boleta_id =         $id;
        $this->fecha_prestamo =    $boleta->fecha_prestamo; 
        $this->fecha_devolucion =  $boleta->fecha_devolucion; 
        $this->estado =            $boleta->estado;  
        $this->usuario_id =        $boleta->usuario_id;  
        $this->abrirModal();
    }
    public function borrar($id)
    {
        boleta_prestamo::find($id)->delete();
        session()->flash('message', 'Registro eliminado correctamente');
    }
    public function guardar()
    {
        boleta_prestamo::updateOrCreate(['id'=>$this->boleta_id],
            [
                'fecha_prestamo' => $this->fecha_prestamo,
                'fecha_devolucion' => $this->fecha_devolucion,
                'estado' => $this->estado,
                'usuario_id' => $this->usuario_id
            ]);
         
         session()->flash('message',
            $this->boleta_id ? '¡Actualización exitosa!' : '¡Alta Exitosa!');
         
         $this->cerrarModal();
         $this->limpiarCampos();
    }
}
