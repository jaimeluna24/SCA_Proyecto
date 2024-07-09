<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Empleado extends ModelBase
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'nombre',
        'apellido',
        'cod_empleado',
        'telefono',
        'email',
    ];

    // Relación con docente
    public function docente()
    {
        return $this->hasOne(Docente::class, 'empleado_id');
    }

    // Relación con usuario
    public function usuario()
    {
        return $this->hasOne(User::class, 'empleado_id');
    }
}
