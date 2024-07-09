<?php

namespace App\Livewire\Docente\Solicitudes;

use Livewire\Component;
use App\Models\Solicitud;
use App\Models\Aula;
use App\Models\EstadoSolicitud;
use App\Models\TipoAula;
use Illuminate\Database\QueryException;
use Carbon\Carbon;

class Crear extends Component
{
    public $fecha;
    public $hora_inicio;
    public $hora_final;
    public $descripcion;
    public $link;
    public $tipo_aula;
    public $estado_id;
    public $aula;
    public $alertWarning = false;
    public $error = false;
    public $requerir_link = false;


    public function changeHora()
    {
        $this->alertWarning = false;
    }

    public function render()
    {
        $aulas = Aula::all();
        $estados = EstadoSolicitud::all();
        $tipos = TipoAula::all();
        return view('livewire.docente.solicitudes.crear', ['aulas' => $aulas, 'estados' => $estados, 'tipos' => $tipos]);
    }

    public function rules()
    {
        return [
            'fecha' => 'required|date|after:today',
            'hora_inicio' => 'required|date_format:H:i',
            'hora_final' => 'required|date_format:H:i|after:hora_inicio',
            'descripcion' => 'required',
            'link' => 'required_if:tipo_aula,Virtual',
            'aula' => 'required_if:tipo_aula,Presencial',
        ];
    }

    public function messages()
    {
        return [
            'fecha.required' => 'El campo fecha es requerido.',
            'fecha.date' => 'El campo fecha debe ser una fecha válida.',
            'fecha.after' => 'El campo fecha debe ser una fecha posterior a hoy.',

            'hora_inicio.required' => 'El campo hora inicio es requerido.',
            'hora_inicio.date_format' => 'El campo hora inicio debe tener un formato válido de hora (HH:mm).',

            'hora_final.required' => 'El campo hora final es requerido.',
            'hora_final.date_format' => 'El campo hora final debe tener un formato válido de hora (HH:mm).',
            'hora_final.after' => 'El campo hora final debe ser posterior a la hora de inicio.',

            'descripcion.required' => 'El campo descripción es requerido.',

            'link.required_if' => 'El campo link es requerido cuando el tipo de aula es virtual.',
            'aula.required_if' => 'El campo aula es requerido cuando el tipo de aula es presencial.',
        ];
    }

    public function validarExistencia()
    {
        $this->validate();
        // if($this->tipo_aula == 'Virtual'){
        //     $this->requerir_link = true;
        // }else {
        //     $this->requerir_link = false;
        // }
        $aula = Aula::where('nombre', $this->aula)->first();
        // $solicitudExis = Solicitud::where('fecha', $this->fecha)->
        //                             where('hora_inicio', $this->hora_inicio)->
        //                             where('hora_final', $this->hora_final)->
        //                             where('aula_id', $aula->id)->first();
        $solicitudExis = Solicitud::where('fecha', $this->fecha)
                                  ->where('aula_id', $aula->id)
                                  ->first();

        if ($solicitudExis) {
            $inicioExistente = $solicitudExis->hora_inicio;
            $finalExistente = $solicitudExis->hora_final;
            $inicioNueva = $this->hora_inicio;
            $finalNueva = $this->hora_final;

            $horaInicio = Carbon::parse($inicioNueva);
            $horaFinal = Carbon::parse($finalNueva);

            $consulta = Solicitud::where(function ($query) use ($horaInicio, $horaFinal) {
                $query->where(function ($query) use ($horaInicio, $horaFinal) {
                    $query->where('hora_inicio', '>=', $horaInicio)
                          ->where('hora_inicio', '<', $horaFinal);
                })->orWhere(function ($query) use ($horaInicio, $horaFinal) {
                    $query->where('hora_final', '>', $horaInicio)
                          ->where('hora_final', '<=', $horaFinal);
                })->orWhere(function ($query) use ($horaInicio, $horaFinal) {
                    $query->where('hora_inicio', '<', $horaInicio)
                          ->where('hora_final', '>', $horaFinal);
                });
            })->get();

            if ($consulta->isNotEmpty()) {
                    $this->alertWarning = true;
                    toastr()->warning('Aula solicitada para esa fecha y hora', 'Error', ['timeOut' => 5000]);
            } else {
                $this->register();
            }
        } else {
            $this->register();

        }
    }

    public function register()
    {
        try{
            $aula = Aula::where('nombre', $this->aula)->first();
            $tipoAula = TipoAula::where('tipo', $this->tipo_aula)->first();
            $this->validate();

            if($aula){
                $solicitud = new Solicitud();

                $solicitud->fecha = $this->fecha;
                $solicitud->hora_inicio = $this->hora_inicio;
                $solicitud->hora_final = $this->hora_final;
                $solicitud->descripcion = $this->descripcion;
                $solicitud->link = $this->link;
                $solicitud->tipo_aula_id = $tipoAula->id;
                $solicitud->estado_id = 1;
                $solicitud->aula_id = $aula->id;

                $solicitud->save();
                toastr()->success('Solicitud creada exitosamente', 'Éxito', ['timeOut' => 5000]);

                return redirect(route('mis-solicitudes'));
            }else{
                $this->error = true;
                toastr()->error('Aula incorrecta', 'Error', ['timeOut' => 5000]);
            }


        }catch (QueryException $e){
            $errorCode = $e->errorInfo[1];
            if ($errorCode == 1451) {
                toastr()->error('Hay un error en la petición, comunicate con el administrador', 'Error', ['timeOut' => 5000]);

            } elseif ($errorCode == 1048) {
                toastr()->info('Hay campos que requieren ser llenados', 'Información', ['timeOut' => 5000]);

            } elseif ($errorCode == 1216 || $errorCode == 1217) {
                toastr()->error('Hay un error en la petición, comunicate con el administrador', 'Error', ['timeOut' => 5000]);
            } else {
                toastr()->error('Error en la base de datos, comunicate con el administrador', 'Error', ['timeOut' => 5000]);

            }
        }
    }
}
