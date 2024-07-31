<?php

namespace App\Livewire\Admin\Horarios;

use Livewire\Component;
use App\Models\Aula;
use App\Models\TipoAula;
use App\Models\Docente;
use App\Models\Clase;
use App\Models\Periodo;
use App\Models\Carrera;


class Crear extends Component
{
    public $dias_semanas = ['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo'];

    public $carrera_id;
    public $hora_inicio;
    public $hora_fin;
    public $link;
    public $observaciones;
    public $aula_id;
    public $tipo_aula_id;
    public $docente_id;
    public $clase_id;
    public $periodo_id;
    public $usuario_id;
    public $dias = [];

    public function render()
    {
        $aulas = Aula::all();
        $tipo_aulas = TipoAula::all();
        $docentes = Docente::all();
        $clases = Carrera::find($this->carrera_id)->clases ?? collect([]);
        $periodos = Periodo::all();
        $carreras = Carrera::all();
        return view('livewire.admin.horarios.crear',['aulas' => $aulas, 'tipo_aulas' => $tipo_aulas, 'docentes' => $docentes,
                                                     'clases' => $clases, 'periodos' => $periodos, 'carreras' => $carreras]);
    }
}
