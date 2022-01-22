<?php

namespace App\Http\Livewire;
use App\Models\noticia;
use Livewire\Component;

class NoticiaController extends Component
{
    public $noticias, $noticia_id, $titulo, $fecha, $contenido, $sector_id, $usuario_id;
    public $modal=false;
    public function render()
    {   
        $this->noticias = noticia::all();
        // return view('livewire.view-all-noticias'); 
        return view('livewire.view-noticia');
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
        $this->titulo='';
        $this->fecha='';
        $this->contenido='';
        $this->usuario_id='';
        $this->sector_id='';
        $this->noticia_id=''; 
    }
    public function editar($id)
    {
        $noticia = noticia::findOrFail($id); 
        $this->noticia_id =     $id;
        $this->titulo =         $noticia->titulo; 
        $this->fecha =          $noticia->fecha; 
        $this->contenido =      $noticia->contenido; 
        $this->usuario_id =     $noticia->usuario_id; 
        $this->sector_id =      $noticia->sector_id;  
        $this->abrirModal();
    }
    public function borrar($id)
    {
        noticia::find($id)->delete();
        session()->flash('message', 'Registro eliminado correctamente');
    }
    public function guardar()
    {
        noticia::updateOrCreate(['id'=>$this->noticia_id],
            [
                'titulo'        => $this->titulo,
                'fecha'         => $this->fecha,
                'contenido'     => $this->contenido,
                'usuario_id'    => $this->usuario_id,
                'sector_id'     => $this->sector_id,
            ]);
         
         session()->flash('message',
            $this->noticia_id ? '¡Actualización exitosa!' : '¡Alta Exitosa!');
         
         $this->cerrarModal();
         $this->limpiarCampos();
    }
}
