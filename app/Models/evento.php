<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class evento extends Model
{
    public $timestamps = false;
    protected $table='evento';
    protected $fillable=['nombre','fecha_inicio','fecha_fin','lugar','comision','estado','sector_id'];

    public function sectores()
    {
        return $this->belongsTo(Categoria::class,'sector_id');
    }
}
