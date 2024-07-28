<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Carrera extends ModelBase
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'carrera',
    ];

    public function clases()
    {
        return $this->belongsToMany(Clase::class, 'carrera_clases');
    }
}
