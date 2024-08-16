<?php

namespace App\Livewire\Admin\Historiales;

use Livewire\Component;
use App\Models\Horario;
use App\Models\Periodo;

class HistorialesHorarios extends Component
{

    public $modeDetalle = false;
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
    public $periodoSelected;


    public function render()
    {
        $periodos = Periodo::where('active', false)->get();

        if($this->periodoSelected != 0 && $this->query != null){
            $horarios = Horario::where('periodo_id', $this->periodoSelected)
            ->whereHas('periodo', function($query) {
                    $query->where('active', false);
                })
                ->where(function($query) {
                    $query->whereHas('docente', function($query) {
                        $query->where('nombre', 'like', '%'.$this->query.'%')
                              ->orWhere('apellido', 'like', '%'.$this->query.'%');
                    })
                    ->orWhereHas('aula', function($query) {
                        $query->where('nombre', 'like', '%'.$this->query.'%');
                    });
                })

            ->get();
        }elseif($this->periodoSelected != 0){
            $horarios = Horario::where('periodo_id', $this->periodoSelected)
            ->whereHas('periodo', function($query) {
                $query->where('active', false);
            })
            ->get();
        }else{
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
                $query->where('active', false);
            })
            ->get();
        }


        return view('livewire.admin.historiales.historiales-horarios', ['horarios' => $horarios, 'periodos' => $periodos]);
    }


    public function modeList(){
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
        $this->deshabilitar = $this->horario->deshabilitar;
    }
}
