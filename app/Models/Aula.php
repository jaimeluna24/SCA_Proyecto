<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{
    use HasFactory;

    // Relación con solicitud
    public function solicitud()
    {
        return $this->hasOne(Solicitud::class, 'aula_id');
    }
}
