<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class solicitud_trabajo extends Model
{
    public $timestamps = false;
    protected $table='solicitud_trabajo';
    protected $fillable=['nombre','descripcion','telefono','sector_id'];

    public function sectores()
    {
        return $this->belongsTo(Categoria::class,'sector_id');
    } 
}
