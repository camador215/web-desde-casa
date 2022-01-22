<?php

namespace App\Http\Livewire;
use App\Models\multa;
use Livewire\Component;

class MultaController extends Component
{
    public $multas, $multa_id, $importe, $estado, $boleta_prestamo_id;
    public $modal=false;
    public function render()
    {   
        $this->multas = multa::all();
        return view('livewire.view-multa');
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
        $this->importe='';
        $this->estado='';
        $this->boleta_prestamo_id=''; 
        $this->multa_id=''; 
    }
    public function editar($id)
    {
        $multa = multa::findOrFail($id); 
        $this->multa_id =           $id;
        $this->importe =            $multa->importe; 
        $this->estado =             $multa->estado; 
        $this->boleta_prestamo_id = $multa->boleta_prestamo_id;  
        $this->abrirModal();
    }
    public function borrar($id)
    {
        multa::find($id)->delete();
        session()->flash('message', 'Registro eliminado correctamente');
    }
    public function guardar()
    {
        multa::updateOrCreate(['id'=>$this->multa_id],
            [
                'importe'               => $this->importe,
                'estado'                => $this->estado,
                'boleta_prestamo_id'    => $this->boleta_prestamo_id
            ]);
         
         session()->flash('message',
            $this->multa_id ? '¡Actualización exitosa!' : '¡Alta Exitosa!');
         
         $this->cerrarModal();
         $this->limpiarCampos();
    }
}
