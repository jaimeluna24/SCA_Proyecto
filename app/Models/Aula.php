<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Aula extends ModelBase
{
    use HasFactory;
    use SoftDeletes;

    // Relación con solicitud
    public function solicitud()
    {
        return $this->hasOne(Solicitud::class, 'aula_id');
    }
}
