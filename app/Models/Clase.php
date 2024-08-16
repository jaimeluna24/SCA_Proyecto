<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Clase extends ModelBase
{
    use SoftDeletes;
    use HasFactory;

    protected $fillable = [
        'codigo',
        'asignatura',
    ];

    // Relación con carreraClase
    // public function carreraClase()
    // {
    //     return $this->hasMany(CarreraClase::class, 'clase_id');
    // }

    // Relación con horario
    // public function horario()
    // {
    //     return $this->hasMany(horario::class, 'clase_id');
    // }

    public function carreras()
    {
        return $this->belongsToMany(Carrera::class, 'carrera_clases');
    }
    public function solicitud()
    {
        return $this->hasMany(Solicitud::class, 'clase_id');
    }
}
