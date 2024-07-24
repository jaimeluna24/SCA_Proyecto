<?php

namespace App\Livewire\Admin\Solicitudes;

use App\Models\Aula;
use App\Models\EstadoSolicitud;
use Livewire\Component;
use App\Models\Solicitud;
use App\Models\TipoAula;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class SolicitudesPendientes extends Component
{
    use WithoutUrlPagination;

    public $query = '';
    public $estado_id = 0;
    public $fecha = null;
    public $observacion;
    public $observacionACT;
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

    public function mount(){
        $this->observacionACT = $this->observacion;
    }

    public function render()
    {
        if ($this->fecha != null){
            $solicitudes = Solicitud::where('estado_id', 1)
                                    ->where('fecha', $this->fecha)
                                    ->whereHas('user', function($query) {
                                        $query->whereNull('deleted_at');
                                    })
                                    ->with('estado')->with('tipo_aula')->with('aula')->get();
        }else {
            $solicitudes = Solicitud::where('estado_id', 1)
                                    ->whereHas('user', function($query) {
                                        $query->whereNull('deleted_at');
                                    })
                                    ->with('estado')->with('tipo_aula')->with('aula')->get();
        }
        return view('livewire.admin.solicitudes.solicitudes-pendientes',['solicitudes' => $solicitudes]);
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

        if($solicitud->link != null){
            $this->requerir_link = true;
        }
        $this->detalles = true;
    }

    public function aprobar()
    {
        $solicitud = Solicitud::findOrFail($this->solicitud_id);
        $this->validate([
            'observacion' => 'required',
        ]);

        if($this->observacion){
            $solicitud->update([
                'observacion' => $this->observacion,
                'estado_id' => 2,
            ]);
            toastr()->success('Se ha aprobado la solicitud', 'Éxito', ['timeOut' => 6000]);
            // return redirect(route('solicitudes-pendientes'));
        $this->detalles = false;

        } else {
            toastr()->error('Ha ocurrido un error','Error', ['timeOut' => 6000]);
        }
    }

    public function rechazar()
    {
        $solicitud = Solicitud::findOrFail($this->solicitud_id);
        $this->validate([
            'observacion' => 'required',
        ]);

        if($this->observacion){
            $solicitud->update([
                'observacion' => $this->observacion,
                'estado_id' => 3,
            ]);
            toastr()->info('Se ha rechazado la solicitud', 'Éxito', ['timeOut' => 6000]);
            // return redirect(route('solicitudes-pendientes'));
        $this->detalles = false;

        } else {
            toastr()->error('Ha ocurrido un error','Error', ['timeOut' => 6000]);
        }
    }

    public function cancelar(){
        $this->detalles = false;
    }
}
