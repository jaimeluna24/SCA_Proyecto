<?php

namespace App\Livewire\Admin\Historiales;

use Livewire\Component;
use App\Models\Asistencia;
use App\Models\Docente;
use Carbon\Carbon;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use App\Models\Periodo;


class HistorialesAsistencias extends Component
{
    use WithFileUploads;

    public $imageUrl;
    public $fechaSeleccionada;
    public $detalleAsistencia = false;
    public $asistenciaSelected;
    public $query ='';
    public $evidenciaPreview;
    public $periodoSelected;

    public function render()
    {
        $periodos = Periodo::all();

        if($this->periodoSelected != 0 && $this->query != null){

            $asistencias = Asistencia::whereHas('horario', function($query){
                $query->where('periodo_id', $this->periodoSelected);
                })
                ->whereHas('docente', function($query){
                    $query->where('nombre', 'like', '%' . $this->query . '%')
                          ->orWhere('apellido', 'like', '%' . $this->query . '%');
                })
                ->where('estado_id', '>', 1)
                ->get();

        }elseif($this->periodoSelected != 0){

            $asistencias = Asistencia::whereHas('horario', function($query){
                                    $query->where('periodo_id', $this->periodoSelected);
                                    })
                                    ->where('estado_id', '>', 1)
                                    ->get();
        }elseif($this->query){

            $asistencias = Asistencia::whereHas('docente', function($query){
                $query->where('nombre', 'like', '%' . $this->query . '%')
                      ->orWhere('apellido', 'like', '%' . $this->query . '%');
            })
            ->where('estado_id', '>', 1)
            ->get();

        }else{
            $asistencias = Asistencia::where('estado_id','>', 1)->get();

        }


        return view('livewire.admin.historiales.historiales-asistencias', ['asistencias' => $asistencias, 'periodos' => $periodos]);
    }

    public function modeMarcarAsistencia($id)
    {
        $this->detalleAsistencia = true;
        $this->asistenciaSelected = Asistencia::find($id);
    }

    public function modeList(){
        $this->detalleAsistencia = false;
    }
}
