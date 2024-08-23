<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HorarioCarrera extends Model
{
    use HasFactory;

    protected $fillable = [
        'horario_id',
        'carrera_id'
    ];
}
