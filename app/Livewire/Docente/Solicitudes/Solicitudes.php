<?php

namespace App\Livewire\Docente\Solicitudes;

use Livewire\Component;
use App\Models\Solicitud;
use Illuminate\Support\Facades\Auth;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class Solicitudes extends Component
{
    use WithoutUrlPagination;

    public $query = '';
    public $estado_id = 0;
    public $fecha = null;

    public function render()
    {
        if($this->estado_id != 0 && $this->fecha != null){
            $solicitudes = Solicitud::where('created_by', Auth::user()->id)
                                    ->where('fecha', $this->fecha)
                                    ->where('estado_id', $this->estado_id)
                                    ->with('estado')->with('tipo_aula')->with('aula')->get();

        }elseif ($this->fecha != null){
            $solicitudes = Solicitud::where('created_by', Auth::user()->id)
                                    ->where('fecha', $this->fecha)
                                    ->with('estado')->with('tipo_aula')->with('aula')->get();
        }elseif ($this->estado_id > 0) {
            $solicitudes = Solicitud::where('created_by', Auth::user()->id)
                                    ->where('estado_id', $this->estado_id)
                                    ->with('estado')->with('tipo_aula')->with('aula')->get();
        }else{
            $solicitudes = Solicitud::where('created_by', Auth::user()->id)
                                    ->with('estado')->with('tipo_aula')->with('aula')->get();
        }
        return view('livewire.docente.solicitudes.solicitudes',['solicitudes' => $solicitudes]);
    }

    public function resetFiltro(){
        $this->estado_id = 0;
        $this->fecha = null;
    }
}
