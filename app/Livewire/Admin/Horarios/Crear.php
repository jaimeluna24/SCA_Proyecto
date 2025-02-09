<?php

namespace App\Livewire\Admin\Horarios;

use App\Models\Asistencia;
use Livewire\Component;
use App\Models\Aula;
use App\Models\TipoAula;
use App\Models\Docente;
use App\Models\Clase;
use App\Models\Periodo;
use App\Models\Carrera;
use App\Models\Horario;
use App\Models\HorarioCarrera;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class Crear extends Component
{
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
    public $carrerasSelected = [];
    public $query ='';
    public $claseSelected = '';

    public function render()
    {
        $aulas = Aula::all();
        $tipo_aulas = TipoAula::all();
        $docentes = Docente::all();
        $clases = Clase::all();
        $periodos = Periodo::where('active', true)->get();
        $carreras = Carrera::all();
        // $carreras = Carrera::where('carrera', 'like', '%'.$this->query.'%')->get();
        return view('livewire.admin.horarios.crear',['aulas' => $aulas, 'tipo_aulas' => $tipo_aulas, 'docentes' => $docentes,
                                                     'clases' => $clases, 'periodos' => $periodos, 'carreras' => $carreras]);
    }

    public function clean(){
        $this->hora_inicio = '';
        $this->hora_fin = '';
        $this->link = '';
        $this->observacion = '';
        $this->aula_id = null;
        $this->tipo_aula_id = null;
        $this->docente_id = null;
        $this->claseSelected = '';
        $this->periodo_id = null;

        $this->carrera_id = null;
        $this->dias = [];
        $this->carrerasSelected = [];
    }

    public function register()
    {
        if($this->claseSelected){
            $clase = Clase::where('asignatura', $this->claseSelected)->first();
            // dd($clase);

        }
        // $this->validate();
        $this->validate([
            'hora_inicio' => 'required',
            'hora_fin' => 'required',
            'observacion' => 'required',
            'aula_id' => 'required',
            'tipo_aula_id' => 'required',
            'docente_id' => 'required',
            'periodo_id' => 'required',
            'dias' => 'required'
        ]);

        $user = Auth::user();
        $dias_espanol = '';
        // foreach ($this->dias as $dia) {
            $dias_espanol = $this->traduccion_dias[$this->dias];
        // }
        // dd($dias_espanol);


        // $dias = implode(', ', $dias_espanol);

        $horario = new Horario();

        $horario->dias = $dias_espanol;
        $horario->hora_inicio = $this->hora_inicio;
        $horario->hora_fin = $this->hora_fin;
        $horario->link = $this->link;
        $horario->observacion = $this->observacion;
        $horario->aula_id = $this->aula_id;
        $horario->tipo_aula_id = $this->tipo_aula_id;
        $horario->docente_id = $this->docente_id;
        $horario->clase_id = $clase->id;
        $horario->periodo_id = $this->periodo_id;
        $horario->usuario_id = $user->id;

        if (!$this->validarHorarioClases($horario)) {
            toastr()->error('El docente tiene clases asignadas en ese horario para ese día', 'Error', ['timeOut' => 5000]);

            // $this->addError('horario', 'Este horario coincide con otro existente.');
            return;
        }

        if (!$this->validarHorarioAulas($horario)) {
            toastr()->error('El aula no esta disponible en ese horario para ese día', 'Error', ['timeOut' => 5000]);

            // $this->addError('horario', 'Este horario coincide con otro existente.');
            return;
        }
        $horario->save();

        $periodo = Periodo::find($this->periodo_id);


        $startDate = Carbon::parse($periodo->fecha_inicio);
        $endDate = Carbon::parse($periodo->fecha_final);

        if($horario){
            foreach($this->carrerasSelected as $carrera){
                HorarioCarrera::create([
                    'horario_id' => $horario->id,
                    'carrera_id' => $carrera
                ]);
            }
        }

        if($horario){
            // foreach ($this->dias as $dia) {
                $fecha = Carbon::now('America/Tegucigalpa')->format('Y-m-d');
                $fecha = $startDate->copy(); // Reiniciar la fecha para cada día
                $fecha->subDay()->format('Y-m-d');
                // dd($fecha);


                while ($fecha->lte($endDate)) {

                    $fecha->next($this->dias);

                    if ($fecha->lte($endDate)) {
                        Asistencia::create([
                            'fecha' => $fecha->format('Y-m-d'),
                            'hora_inicio' => $this->hora_inicio,
                            'hora_fin' => $this->hora_fin,
                            'link' => $this->link,
                            'observacion' => $this->observacion,
                            'aula_id' => $this->aula_id,
                            'tipo_aula_id' => $this->tipo_aula_id,
                            // 'docente_id' => $this->docente_id,
                            'clase_id' => $clase->id,
                            'periodo_id' => $this->periodo_id,
                            'usuario_id' => $user->id,
                            'estado_id' => 1,
                            'horario_id' => $horario->id,
                            'docente_id' => $this->docente_id
                        ]);

                    } else {
                        // Si la fecha sobrepasa el endDate, salir del bucle
                        break;
                    }
                }
            toastr()->success('Horarios registrados con éxito', 'Éxito', ['timeOut' => 5000]);
            $this->clean();
        }


    }

    public function validarHorarioClases(Horario $horario)
    {
        $horariosExistentes = Horario::where(function ($query) use ($horario) {
            $query->where('docente_id', $horario->docente_id)
                  ->where('dias', 'like', '%'.$horario->dias.'%')
                  ->where(function ($query) use ($horario) {
                        $query->whereBetween('hora_inicio', [$horario->hora_inicio, $horario->hora_fin])
                              ->orWhereBetween('hora_fin', [$horario->hora_inicio, $horario->hora_fin])
                              ->orWhere(function ($query) use ($horario) {
                                    $query->where('hora_inicio', '<=', $horario->hora_inicio)
                                          ->where('hora_fin', '>=', $horario->hora_fin);
                                });
                  });
        })->get();

        //  dd($horariosExistentes);
        return $horariosExistentes->isEmpty();
    }

    public function validarHorarioAulas(Horario $horario)
    {
        $horariosExistentes = Horario::where(function ($query) use ($horario) {
            $query->where('aula_id', $horario->aula_id)
                  ->where('dias', 'like', '%'.$horario->dias.'%')
                  ->where(function ($query) use ($horario) {
                        $query->whereBetween('hora_inicio', [$horario->hora_inicio, $horario->hora_fin])
                              ->orWhereBetween('hora_fin', [$horario->hora_inicio, $horario->hora_fin])
                              ->orWhere(function ($query) use ($horario) {
                                    $query->where('hora_inicio', '<=', $horario->hora_inicio)
                                          ->where('hora_fin', '>=', $horario->hora_fin);
                                });
                  });
        })->get();

        //  dd($horariosExistentes);
        return $horariosExistentes->isEmpty();
    }




    public function rules()
    {
        return [
            'hora_inicio' => 'required|date_format:H:i',
            'hora_fin' => 'required|date_format:H:i|after:hora_inicio',
            'observacion' => 'required',
            'link' => 'required_if:tipo_aula_id,1',
            'aula_id' => 'required_if:tipo_aula_id,2',
            'clase_id' => 'required',
            'tipo_aula_id' => 'required',
            'docente_id' => 'required',
            'periodo_id' => 'required',
            'carrera_id' => 'required',
            'dias' => 'required'
        ];
    }

    public function messages()
    {
        return [

            'hora_inicio.required' => 'El campo hora inicio es requerido.',
            'hora_inicio.date_format' => 'El campo hora inicio debe tener un formato válido de hora (HH:mm).',

            'hora_fin.required' => 'El campo hora final es requerido.',
            'hora_fin.date_format' => 'El campo hora final debe tener un formato válido de hora (HH:mm).',
            'hora_fin.after' => 'El campo hora final debe ser posterior a la hora de inicio.',

            'observacion.required' => 'El campo es requerido.',

            'link.required_if' => 'El campo link es requerido cuando el tipo de aula es virtual.',
            'aula_id.required_if' => 'El campo aula es requerido cuando el tipo de aula es presencial.',

            'docente_id.required' => 'El campo es requerido.',
            'periodo_id.required' => 'El campo es requerido.',
            'tipo_aula_id.required' => 'El campo es requerido.',
            'clase_id.required' => 'El campo es requerido.',
            'carrera_id.required' => 'El campo es requerido.',
            'dias.required' => 'El campo es requerido.',
        ];
    }

}
