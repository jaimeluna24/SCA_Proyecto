<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoAula extends Model
{
    use HasFactory;

    // Relación con solicitud
    public function solicitud()
    {
        return $this->hasOne(Solicitud::class, 'tipo_aula_id');
    }
}
