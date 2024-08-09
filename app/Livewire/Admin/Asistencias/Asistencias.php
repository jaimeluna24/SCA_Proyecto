<?php

namespace App\Livewire\Admin\Asistencias;

use Livewire\Component;
use App\Models\Asistencia;
use App\Models\Docente;
use Carbon\Carbon;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class Asistencias extends Component
{

    use WithFileUploads;

    public $imageUrl;
    public $fechaSeleccionada;
    public $marcarAsistencia = false;
    public $asistenciaSelected;
    public $newImage;
    public $evidencia;
    public $query ='';
    public $evidenciaPreview;




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

    public function updatedEvidencia()
{
    if ($this->evidencia) {
        $this->evidenciaPreview = $this->evidencia->temporaryUrl();
    }
}

    public function modeFalta(){
        $this->validate([
            'evidencia' => 'required|image|mimes:jpeg,png,jpg',
        ]);

        $imagePath = $this->evidencia->store('evidencia', 'public');

        $this->asistenciaSelected->update([
            'estado_id' => 4,
            'evidencia' => $imagePath
        ]);
        $this->marcarAsistencia = false;

        toastr()->success('Asistencia marcada exitosamente', 'Éxito', ['timeOut' => 5000]);
        $this->evidencia ='';
        $this->evidenciaPreview = '';
    }

    public function modePresente(){

        $this->validate([
            'evidencia' => 'required|image|mimes:jpeg,png,jpg',
        ]);
        // if($this->code64 == true){
        //     $image = str_replace('data:image/png;base64,', '', $this->evidencia64);
        //     $image = str_replace(' ', '+', $image);
        //     $imageName = 'photo-' . time() . '.png';


        //     $imagePath = Storage::disk('public')->put('evidencia/' . $imageName, base64_decode($image));
        // }else{
            $imagePath = $this->evidencia->store('evidencia', 'public');
        // }


        $this->asistenciaSelected->update([
            'estado_id' => 2,
            'evidencia' => $imagePath
        ]);
        $this->marcarAsistencia = false;
        toastr()->success('Asistencia marcada exitosamente', 'Éxito', ['timeOut' => 5000]);
        $this->evidencia ='';
        $this->evidenciaPreview = '';

    }

    public function modeAusente(){
        $this->validate([
            'evidencia' => 'required|image|mimes:jpeg,png,jpg',
        ]);
        $imagePath = $this->evidencia->store('evidencia', 'public');


        $this->asistenciaSelected->update([
            'estado_id' => 3,
            'evidencia' => $imagePath
        ]);
        $this->marcarAsistencia = false;

        toastr()->success('Asistencia marcada exitosamente', 'Éxito', ['timeOut' => 5000]);
        $this->evidencia ='';
        $this->evidenciaPreview = '';

    }

    public function modeList(){
        $this->marcarAsistencia = false;
        $this->evidencia ='';
    }
}
