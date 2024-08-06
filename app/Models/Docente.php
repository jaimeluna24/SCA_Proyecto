<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Docente extends ModelBase
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'nombre',
        'apellido',
        'telefono',
        'email',
        'sede_id',
        'empleado_id',
        'active'
    ];

    public function sede()
    {
        return $this->belongsTo(Sede::class, 'sede_id');
    }

    public function empleado()
    {
        return $this->belongsTo(Empleado::class, 'empleado_id');
    }

    public function horarios()
    {
        return $this->hasMany(Horario::class);
    }


}
