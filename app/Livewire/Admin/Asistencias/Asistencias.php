<?php

namespace App\Livewire\Admin\Asistencias;

use Livewire\Component;
use App\Models\Asistencia;
use App\Models\Docente;
use Carbon\Carbon;
use Livewire\WithFileUploads;

class Asistencias extends Component
{

    use WithFileUploads;

    public $fechaSeleccionada;
    public $marcarAsistencia = false;
    public $asistenciaSelected;
    public $newImage;
    public $evidencia;
    public $query ='';


    public function render()
    {
        $fechaActual = Carbon::now('America/Tegucigalpa')->format('Y-m-d');
        // dd($this->fechaSeleccionada);

        if($this->fechaSeleccionada){
            $fechaSearch = $this->fechaSeleccionada;
        // dd($fechaSearch);

            $asistencias = Asistencia::where('fecha', $fechaSearch)->get();
        }elseif($this->query){
            if($this->query){
                $docentes = Docente::where('nombre', 'like', '%' . $this->query . '%')->orWhere('apellido', 'like', '%' . $this->query . '%')->get();
                $horarios = $docentes->pluck('horarios')->flatten();
                $asistencias = $horarios->pluck('asistencias')->flatten();

                // dd($asistencias);
            }else{
                $asistencias = [];
            }

        }else{
            $asistencias = Asistencia::where('fecha', $fechaActual)->get();
        }

        return view('livewire.admin.asistencias.asistencias',['asistencias' => $asistencias]);
    }

    public function modeMarcarAsistencia($id)
    {
        $this->marcarAsistencia = true;
        $this->asistenciaSelected = Asistencia::find($id);
    }

    public function modeFalta(){


        $imagePath = $this->evidencia->store('evidencia', 'public');

        $this->validate([
            'evidencia' => 'required|image|mimes:jpeg,png,jpg',
        ]);
        // Guardar la ruta en la base de datos
        $this->asistenciaSelected->update([
            'estado_id' => 4,
            'evidencia' => $imagePath
        ]);
        $this->marcarAsistencia = false;

        toastr()->success('Asistencia marcada exitosamente', 'Éxito', ['timeOut' => 5000]);
    }

    public function modePresente(){

        $imagePath = $this->evidencia->store('evidencia', 'public');


        $this->validate([
            'evidencia' => 'required|image|mimes:jpeg,png,jpg',
        ]);

        // Guardar la ruta en la base de datos
        $this->asistenciaSelected->update([
            'estado_id' => 2,
            'evidencia' => $imagePath
        ]);
        $this->marcarAsistencia = false;
        toastr()->success('Asistencia marcada exitosamente', 'Éxito', ['timeOut' => 5000]);

    }

    public function modeAusente(){
        $imagePath = $this->evidencia->store('evidencia', 'public');


        $this->validate([
            'evidencia' => 'required|image|mimes:jpeg,png,jpg',
        ]);

        // Guardar la ruta en la base de datos
        $this->asistenciaSelected->update([
            'estado_id' => 3,
            'evidencia' => $imagePath
        ]);
        $this->marcarAsistencia = false;

        toastr()->success('Asistencia marcada exitosamente', 'Éxito', ['timeOut' => 5000]);

    }
}
