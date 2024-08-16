<?php

namespace App\Livewire\Docente\Horarios;

use App\Models\Horario;
use Livewire\Component;
use App\Models\Docente;
use Illuminate\Support\Facades\Auth;


class MisHorarios extends Component
{
    public $traduccion_dias = [
        'Monday' => 'Lunes',
        'Tuesday' => 'Martes',
        'Wednesday' => 'Miércoles',
        'Thursday' => 'Jueves',
        'Friday' => 'Viernes',
        'Saturday' => 'Sábado',
        'Sunday' => 'Domingo',
    ];
    public $carrera_id;
    public $hora_inicio;
    public $hora_fin;
    public $link;
    public $observacion;
    public $aula_id;
    public $tipo_aula_id;
    public $docente_id;
    public $clase_id;
    public $periodo_id;
    public $usuario_id;
    public $dias = [];

    public $query ='';
    public $horario;
    public $claseName;
    public $modeDetalle = false;
    public $docenteId;


    public function mount()
    {
        // Obtener el usuario autenticado
        $user = Auth::user();

        // Buscar el docente relacionado con el empleado_id del usuario autenticado
        $docente = Docente::where('empleado_id', $user->empleado_id)->first();

        // Almacenar el id del docente si existe
        if ($docente) {
            $this->docenteId = $docente->id;
        } else {
            // Manejo en caso de que no se encuentre el docente
            $this->docenteId = null;
        }
    }

    public function render()
    {

        $horarios = Horario::where(function($query) {
            $query->whereHas('docente', function($query) {
                $query->where('nombre', 'like', '%'.$this->query.'%')
                      ->orWhere('apellido', 'like', '%'.$this->query.'%');
            })
            ->orWhereHas('aula', function($query) {
                $query->where('nombre', 'like', '%'.$this->query.'%');
            });
        })
        ->whereHas('periodo', function($query) {
            $query->where('active', true);
        })->where('docente_id', $this->docenteId)
        ->get();
        return view('livewire.docente.horarios.mis-horarios', ['horarios' => $horarios]);
    }



    public function cerrar()
    {
        $this->dias = [];
        $this->hora_inicio = '';
        $this->hora_fin = '';
        $this->link = '';
        $this->observacion = '';
        $this->aula_id = null;
        $this->tipo_aula_id = null;
        $this->docente_id = null;
        $this->clase_id = null;
        $this->periodo_id = null;
    }

    public function modeList(){
        $this->dias = [];
        $this->hora_inicio = '';
        $this->hora_fin = '';
        $this->link = '';
        $this->observacion = '';
        $this->aula_id = null;
        $this->tipo_aula_id = null;
        $this->docente_id = null;
        $this->clase_id = null;
        $this->periodo_id = null;
        $this->modeDetalle = false;

    }

    public function modeDetalles($id){
        $this->modeDetalle = true;

        $this->horario = Horario::find($id);
        $this->dias = $this->horario->dias;
        $this->hora_inicio = $this->horario->hora_inicio;;
        $this->hora_fin = $this->horario->hora_fin;
        $this->link = $this->horario->link;
        $this->observacion = $this->horario->observacion;
        $this->aula_id =$this->horario->aula_id;
        $this->tipo_aula_id =$this->horario->tipo_aula_id;
        $this->docente_id =$this->horario->docente_id;
        $this->clase_id =$this->horario->clase_id;
        $this->periodo_id =$this->horario->periodo_id;
    }


}
