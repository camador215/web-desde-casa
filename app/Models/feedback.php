<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class feedback extends Model
{
    public $timestamps = false;
    protected $table='feedback';
    protected $fillable=['comentario','calificacion','noticia_id','usuario_id'];

    public function noticias()
    {
        return $this->belongsTo(Categoria::class,'noticia_id');
    }
    public function usuarios()
    {
        return $this->belongsTo(Marca::class,'usuario_id');
    }
}
