<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    public $timestamps = false;
    protected $table='usuario';
    protected $fillable=['nombre','correo','contrasena','rol_id'];

    public function sectores()
    {
        return $this->belongsTo(Categoria::class,'rol_id');
    }
}
