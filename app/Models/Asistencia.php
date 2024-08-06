<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Asistencia extends ModelBase
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'fecha',
        'hora_inicio',
        'hora_fin',
        'observacion',
        'evidencia',
        'horario_id',
        'estado_id',
        'usuario_id',
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class, 'usuario_id');
    }

    public function estado()
    {
        return $this->belongsTo(EstadoSolicitud::class, 'estado_id');
    }

    public function horario()
    {
        return $this->belongsTo(Horario::class, 'horario_id');
    }
}
