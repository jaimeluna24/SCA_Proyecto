<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Periodo extends ModelBase
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'nombre',
        'identificador',
        'anio',
        'fecha_inicio',
        'fecha_final',
        'active'
    ];

     // Relación con periodo
     public function clase()
     {
         return $this->hasMany(Periodo::class, 'periodo_id');
     }

     public function horario()
     {
         return $this->hasMany(Periodo::class, 'periodo_id');
     }
}
