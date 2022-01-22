<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class equipo_comunicacion extends Model
{
    public $timestamps = false;
    protected $table='equipo_comunicacion';
    protected $fillable=['nombre','estado']; 
}
