<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cubrir extends Model
{
    public $timestamps = false;
    protected $table='cubrir';
    protected $fillable=['usuario_id','evento_id'];

    public function usuarios()
    {
        return $this->belongsTo(Categoria::class,'usuario_id');
    }
    public function eventos()
    {
        return $this->belongsTo(Categoria::class,'evento_id');
    }
}
