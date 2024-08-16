<?php

namespace App\Livewire\Docente\Asistencias;

use Livewire\Component;
use Carbon\Carbon;
use App\Models\Asistencia;
use App\Models\Docente;
use Illuminate\Support\Facades\Auth;

class MisAsistencias extends Component
{
    public $imageUrl;
    public $fechaSeleccionada;
    public $marcarAsistencia = false;
    public $asistenciaSelected;
    public $newImage;
    public $evidencia;
    public $query ='';
    public $evidenciaPreview;
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

        $fechaActual = Carbon::now('America/Tegucigalpa')->format('Y-m-d');

        if($this->fechaSeleccionada){
            $fechaSearch = $this->fechaSeleccionada;

            $asistencias = Asistencia::where('fecha', $fechaSearch)
                                     ->where('docente_id', $this->docenteId)
                                     ->where('estado_id', '>', 1)->get();
        }else{
            $asistencias = Asistencia::where('fecha', $fechaActual)
                                     ->where('docente_id', $this->docenteId)
                                     ->where('estado_id', '>', 1)->get();
        }
        return view('livewire.docente.asistencias.mis-asistencias', ['asistencias' => $asistencias]);
    }

    public function modeList(){
        $this->marcarAsistencia = false;
        $this->evidencia ='';
    }

    public function modeMarcarAsistencia($id)
    {
        $this->marcarAsistencia = true;
        $this->asistenciaSelected = Asistencia::find($id);
    }
}
