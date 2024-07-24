<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Solicitud extends ModelBase
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'descripcion',
        'fecha',
        'observacion',
        'hora_inicio',
        'hora_final',
        'link',
        'aula_id',
        'tipo_aula_id',
        'estado_id',
        'user_id',
    ];

    public function aula()
    {
        return $this->belongsTo(Aula::class, 'aula_id');
    }

    public function tipo_aula()
    {
        return $this->belongsTo(TipoAula::class, 'tipo_aula_id');
    }

    public function estado()
    {
        return $this->belongsTo(EstadoSolicitud::class, 'estado_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
