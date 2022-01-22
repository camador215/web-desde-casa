<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class multa extends Model
{
    public $timestamps = false;
    protected $table='multa';
    protected $fillable=['importe','estado','boleta_prestamo_id'];

    public function boleta_prestamos()
    {
        return $this->belongsTo(Categoria::class,'boleta_prestamo_id');
    } 
}
