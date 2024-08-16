<?php

namespace App\Livewire\Admin\Horarios;

use App\Models\Horario;
use Livewire\Component;
use App\Models\Aula;
use App\Models\TipoAula;
use App\Models\Docente;
use App\Models\Clase;
use App\Models\Periodo;
use App\Models\Carrera;

class Horarios extends Component
{
    public $dias_semanas = [
        [
            'day' => 'Monday',
            'dia' => 'Lunes'
        ],
        [
            'day' => 'Tuesday',
            'dia' => 'Martes'
        ],
        [
            'day' => 'Wednesday',
            'dia' => 'Miércoles'
        ],
        [
            'day' => 'Thursday',
            'dia' => 'Jueves'
        ],
        [
            'day' => 'Friday',
            'dia' => 'Viernes'
        ],
        [
            'day' => 'Saturday',
            'dia' => 'Sábado'
        ],
        [
            'day' => 'Sunday',
            'dia' => 'Domingo'
        ]
    ];

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
    public $deshabilitar = false;
    public $modeEditar = false;
    public $modeDetalle = false;



    public function render()
    {
        $aulas = Aula::all();
        $tipo_aulas = TipoAula::all();
        $docentes = Docente::all();
        $clases = Carrera::find($this->carrera_id)->clases ?? collect([]);
        $periodos = Periodo::where('active', true)->get();
        $carreras = Carrera::all();
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
        })
        ->get();
        return view('livewire.admin.horarios.horarios', ['horarios' => $horarios, 'aulas' => $aulas, 'tipo_aulas' => $tipo_aulas, 'docentes' => $docentes,
                                                     'clases' => $clases, 'periodos' => $periodos, 'carreras' => $carreras]);
    }

    public function rules()
    {
        return [
            'hora_inicio' => 'required|date_format:H:i',
            'hora_fin' => 'required|date_format:H:i|after:hora_inicio',
            'observacion' => 'required',
            'link' => 'required_if:tipo_aula_id,1',
            'aula_id' => 'required_if:tipo_aula_id,2',
            'clase_id' => 'required',
            'tipo_aula_id' => 'required',
            'docente_id' => 'required',
            'periodo_id' => 'required',
            'carrera_id' => 'required',
            'dias' => 'required'
        ];
    }

    public function messages()
    {
        return [

            'hora_inicio.required' => 'El campo hora inicio es requerido.',
            'hora_inicio.date_format' => 'El campo hora inicio debe tener un formato válido de hora (HH:mm).',

            'hora_fin.required' => 'El campo hora final es requerido.',
            'hora_fin.date_format' => 'El campo hora final debe tener un formato válido de hora (HH:mm).',
            'hora_fin.after' => 'El campo hora final debe ser posterior a la hora de inicio.',

            'observacion.required' => 'El campo es requerido.',

            'link.required_if' => 'El campo link es requerido cuando el tipo de aula es virtual.',
            'aula_id.required_if' => 'El campo aula es requerido cuando el tipo de aula es presencial.',

            'docente_id.required' => 'El campo es requerido.',
            'periodo_id.required' => 'El campo es requerido.',
            'tipo_aula_id.required' => 'El campo es requerido.',
            'clase_id.required' => 'El campo es requerido.',
            'carrera_id.required' => 'El campo es requerido.',
            'dias.required' => 'El campo es requerido.',
        ];
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
        $this->deshabilitar = false;
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
        $this->deshabilitar = false;
        $this->modeEditar = false;
        $this->modeDetalle = false;

    }

    public function modeDeshabilitar($id){
        $this->horario = Horario::find($id);
        $this->claseName = $this->horario->clase->asignatura;
        $this->deshabilitar = true;
    }

    public function eliminarHorario(){
        if($this->horario){
            $this->horario->delete();
            toastr()->warning('Horario eliminado éxitosamente', 'Atención', ['timeOut' => 6000]);
            $this->deshabilitar = false;
        }
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
        $this->deshabilitar = $this->horario->deshabilitar;
    }

    public function modeEdit($id){
        $this->modeEditar = true;
        $this->horario = Horario::find($id);
        // $this->dias = $this->horario->dias;
        $this->hora_inicio = $this->horario->hora_inicio;;
        $this->hora_fin = $this->horario->hora_fin;
        $this->link = $this->horario->link;
        $this->observacion = $this->horario->observacion;
        $this->aula_id =$this->horario->aula_id;
        $this->tipo_aula_id =$this->horario->tipo_aula_id;
        $this->docente_id =$this->horario->docente_id;
        $this->clase_id =$this->horario->clase_id;
        $this->periodo_id =$this->horario->periodo_id;
        $this->deshabilitar = $this->horario->deshabilitar;
    }
}
