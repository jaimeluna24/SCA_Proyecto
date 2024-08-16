<?php

namespace App\Livewire\Admin\Solicitudes;

use App\Models\Asistencia;
use App\Models\Aula;
use App\Models\EstadoSolicitud;
use App\Models\Horario;
use Livewire\Component;
use App\Models\Solicitud;
use App\Models\TipoAula;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;
use App\Models\Docente;

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

    public $docenteId;


    public function mount()
    {
        $this->observacionACT = $this->observacion;

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
        $hora_inicio_solicitud = $solicitud->hora_inicio;
        $hora_final_solicitud = $solicitud->hora_final;
        $this->validate([
            'observacion' => 'required',
        ]);

        $horarioExist = Asistencia::whereHas('horario', function ($query) use ($solicitud, $hora_inicio_solicitud, $hora_final_solicitud) {
                                $query->where('fecha', $solicitud->fecha)
                                    ->where('horarios.aula_id', $solicitud->aula_id)
                                    ->where(function ($query) use ($hora_inicio_solicitud, $hora_final_solicitud) {
                                        $query->where('hora_inicio', '<=', $hora_inicio_solicitud)
                                              ->where('hora_fin', '>=', $hora_inicio_solicitud);
                                    })
                                    ->orWhere(function ($query) use ($hora_inicio_solicitud, $hora_final_solicitud) {
                                        $query->where('hora_inicio', '<=', $hora_final_solicitud)
                                                   ->where('hora_fin', '>=', $hora_final_solicitud);
                                    });
                                })->get();
        if($horarioExist->isNotEmpty()){
            toastr()->error('Aula no disponible para ese horario', 'Error', ['timeOut' => 6000]);
            // dd($horarioExist);
        }else{
            if($this->observacion){
                $solicitud->update([
                    'observacion' => $this->observacion,
                    'estado_id' => 2,
                ]);
                // return redirect(route('solicitudes-pendientes'));
                $user = Auth::user();

                Asistencia::create([
                    'fecha' => $solicitud->fecha,
                    'hora_inicio' => $solicitud->hora_inicio,
                    'hora_fin' => $solicitud->hora_final,
                    'link' => $solicitud->link,
                    'observacion' => 'Solicitud',
                    'aula_id' =>$solicitud->aula_id,
                    'tipo_aula_id' =>$solicitud->tipo_aula_id,
                    'clase_id' => $solicitud->clase_id,
                    // 'periodo_id' => $this->periodo_id,
                    'usuario_id' => $user->id,
                    'estado_id' => 1,
                    'horario_id' => null,
                    'docente_id' => $solicitud->docente_id
                ]);
                toastr()->success('Se ha aprobado la solicitud', 'Éxito', ['timeOut' => 6000]);

            $this->detalles = false;


            } else {
                toastr()->error('Ha ocurrido un error','Error', ['timeOut' => 6000]);
            }
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
