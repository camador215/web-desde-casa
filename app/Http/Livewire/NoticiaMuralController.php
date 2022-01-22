<?php

namespace App\Http\Livewire;
use App\Models\noticia;
use Livewire\Component;

class NoticiaMuralController extends Component
{   
    public $noticias;
    public function render()
    {   
        $this->noticias = noticia::all();
        return view('livewire.view-all-noticias'); 
    }
}
