<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class boleta_prestamo extends Model
{
    public $timestamps = false;
    protected $table='boleta_prestamo';
    protected $fillable=['fecha_prestamo','fecha_devolucion','estado','usuario_id'];

    public function usuarios()
    {
        return $this->belongsTo(Categoria::class,'usuario_id');
    } 
}
