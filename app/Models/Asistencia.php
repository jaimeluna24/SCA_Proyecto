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
        'docente_id',
        'tipo_aula_id',
        'clase_id',
        'periodo_id',
        'aula_id'
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class, 'usuario_id');
    }

    public function docente()
    {
        return $this->belongsTo(Docente::class, 'docente_id');
    }

    public function estado()
    {
        return $this->belongsTo(EstadoAsistencia::class, 'estado_id');
    }

    public function horario()
    {
        return $this->belongsTo(Horario::class, 'horario_id');
    }

    public function aula()
    {
        return $this->belongsTo(Aula::class, 'aula_id');
    }

    public function tipo_aula()
    {
        return $this->belongsTo(TipoAula::class, 'tipo_aula_id');
    }



    public function clase()
    {
        return $this->belongsTo(Clase::class, 'clase_id');
    }

    public function periodo()
    {
        return $this->belongsTo(Periodo::class, 'periodo_id');
    }



    public function asistencias()
    {
        return $this->hasMany(Asistencia::class);
    }
}
