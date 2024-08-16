<?php

namespace App\Livewire\Docente\Solicitudes;

use Livewire\Component;
use App\Models\Solicitud;
use Illuminate\Support\Facades\Auth;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;
use App\Models\TipoAula;
use App\Models\User;
use App\Models\Aula;
use App\Models\EstadoSolicitud;
use App\Models\Docente;


class Solicitudes extends Component
{
    use WithoutUrlPagination;

    public $query = '';
    public $estado_id = 0;
    public $fecha = null;

    public $requerir_link = false;
    public $detalles = false;
    public $fechaD;
    public $hora_inicio;
    public $hora_final;
    public $descripcion;
    public $link;
    public $tipo_aula;
    public $estado;
    public $aula;
    public $solicitud_id;
    public $encargado;
    public $observacion;
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
        $user = Auth::user();
        if($this->estado_id != 0 && $this->fecha != null){
            $solicitudes = Solicitud::where('created_by', Auth::user()->id)
                                    ->where('fecha', $this->fecha)
                                    ->where('estado_id', $this->estado_id)
                                    ->where('user_id', $user->id)
                                    ->with('estado')->with('tipo_aula')->with('aula')->get();

        }elseif ($this->fecha != null){
            $solicitudes = Solicitud::where('created_by', Auth::user()->id)
                                    ->where('fecha', $this->fecha)
                                    ->where('user_id', $user->id)
                                    ->with('estado')->with('tipo_aula')->with('aula')->get();
        }elseif ($this->estado_id > 0) {
            $solicitudes = Solicitud::where('created_by', Auth::user()->id)
                                    ->where('estado_id', $this->estado_id)
                                    ->where('user_id', $user->id)
                                    ->with('estado')->with('tipo_aula')->with('aula')->get();
        }else{
            $solicitudes = Solicitud::where('created_by', Auth::user()->id)
                                    ->where('user_id', $user->id)
                                    ->with('estado')->with('tipo_aula')->with('aula')->get();
        }
        return view('livewire.docente.solicitudes.solicitudes',['solicitudes' => $solicitudes]);
    }


    public function resetFiltro(){
        $this->estado_id = 0;
        $this->fecha = null;
    }


    public function detallesSoli($id)
    {
        $solicitud = Solicitud::findOrFail($id);
        $aula = Aula::findOrFail($solicitud->aula_id);
        $estado = EstadoSolicitud::findOrFail($solicitud->estado_id);
        $tipo = TipoAula::findOrFail($solicitud->tipo_aula_id);
        $encargado = User::findOrFail($solicitud->created_by);
        $estado = EstadoSolicitud::findOrFail($solicitud->estado_id);

        $this->solicitud_id = $solicitud->id;
        $this->fechaD = $solicitud->fecha;
        $this->hora_inicio = $solicitud->hora_inicio;
        $this->hora_final = $solicitud->hora_final;
        $this->descripcion = $solicitud->descripcion;
        $this->estado = $estado->estado;
        $this->aula = $aula->nombre;
        $this->tipo_aula = $tipo->tipo;
        $this->link = $solicitud->link;
        $this->encargado = $encargado->nombre. ' ' .$encargado->apellido;
        $this->estado = $estado->estado;
        $this->observacion = $solicitud->observacion;

        if($solicitud->link != null){
            $this->requerir_link = true;
        }
        $this->detalles = true;
    }

    public function cancelar(){
        $this->detalles = false;
    }
}
