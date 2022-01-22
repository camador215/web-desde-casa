<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sector extends Model
{
    public $timestamps = false;
    protected $table='sector';
    protected $fillable=['nombre'];
}
