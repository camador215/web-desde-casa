<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detalle_prestamo extends Model
{
    public $timestamps = false;
    protected $table='detalle_prestamo';
    protected $fillable=['boleta_prestamo_id','equipo_comunicacion_id'];

    public function boleta_prestamos()
    {
        return $this->belongsTo(Categoria::class,'boleta_prestamo_id');
    }
    public function equipo_comunicaciones()
    {
        return $this->belongsTo(Marca::class,'equipo_comunicacion_id');
    }
}
