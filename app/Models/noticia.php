<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class noticia extends Model
{
    public $timestamps = false;
    protected $table='noticia';
    protected $fillable=['titulo','fecha','contenido','sector_id','usuario_id'];

    public function sectores()
    {
        return $this->belongsTo(Categoria::class,'sector_id');
    }
    public function usuarios()
    {
        return $this->belongsTo(Marca::class,'usuario_id');
    }
}
