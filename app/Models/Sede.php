<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sede extends ModelBase
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'nombre',
        'ubicacion'
    ];

    // Relación con docente
    public function docente()
    {
        return $this->hasMany(Docente::class, 'sede_id');
    }
}
