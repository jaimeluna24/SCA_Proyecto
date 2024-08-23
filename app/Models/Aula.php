<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Aula extends ModelBase
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'nombre',
        'capacidad',
        'estado_id',
        'observacion',
    ];

    // Relación con solicitud
    public function solicitud()
    {
        return $this->hasOne(Solicitud::class, 'aula_id');
    }

    public function estado()
    {
        return $this->belongsTo(EstadoAula::class, 'estado_id');
    }

    public function asistencias()
    {
        return $this->hasMany(Asistencia::class, 'aula_id');
    }
}
