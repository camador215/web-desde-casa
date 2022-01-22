<?php

namespace App\Http\Livewire;
use App\Models\feedback;
use Livewire\Component;

class FeedbackController extends Component
{
    public $feedbacks, $feedback_id, $comentario, $calificacion, $noticia_id, $usuario_id;
    public $modal=false;
    public function render()
    {   
        $this->feedbacks = feedback::all();
        return view('livewire.view-feedback');
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
        $this->comentario='';
        $this->calificacion='';
        $this->noticia_id=''; 
        $this->usuario_id=''; 
        $this->feedback_id=''; 
    }
    public function editar($id)
    {
        $feedback = feedback::findOrFail($id); 
        $this->feedback_id =           $id;
        $this->comentario =            $feedback->comentario; 
        $this->calificacion =          $feedback->calificacion; 
        $this->usuario_id =            $feedback->usuario_id;  
        $this->noticia_id =            $feedback->noticia_id;  
        $this->abrirModal();
    }
    public function borrar($id)
    {
        feedback::find($id)->delete();
        session()->flash('message', 'Registro eliminado correctamente');
    }
    public function guardar()
    {
        feedback::updateOrCreate(['id'=>$this->feedback_id],
            [
                'comentario'    => $this->comentario,
                'calificacion'  => $this->calificacion,
                'usuario_id'    => $this->usuario_id,
                'noticia_id'    => $this->noticia_id
            ]);
         
         session()->flash('message',
            $this->feedback_id ? '¡Actualización exitosa!' : '¡Alta Exitosa!');
         
         $this->cerrarModal();
         $this->limpiarCampos();
    }
}
