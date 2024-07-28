<?php

namespace App\Livewire\Admin\Periodos;

use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;
use App\Models\Periodo;
use Illuminate\Database\QueryException;

class Periodos extends Component
{
    public $nombre;
    public $identificador;
    public $anio;
    public $fecha_inicio;
    public $fecha_final;
    public $create = false;
    public $deshabilitar = false;
    public $modeEditar = false;
    public $periodo;
    public $periodoName;

    use WithoutUrlPagination;

    public $query ='';

    public function render()
    {
        $periodos = Periodo::where('nombre', 'like', '%'.$this->query.'%')
                            ->orwhere('anio', 'like', '%'.$this->query.'%')->get();
        return view('livewire.admin.periodos.periodos', ['periodos' => $periodos]);
    }

    public function rules()
    {
        return [
            'nombre' => 'required|',
            'identificador' => 'required',
            'anio' => 'required|min:4',
            'fecha_inicio' => 'required',
            'fecha_final' => 'required'

        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'El campo es requerido',
            'identificador.required' => 'El campo es requerido',
            'anio.required' => 'El campo es requerido',
            'fecha_inicio.required' => 'El campo es requerido',
            'fecha_final.required' => 'El campo es requerido',
            'anio.min' => 'El año debe ser de 4 caracteres',
        ];
    }

    public function crear()
    {
        $this->create = true;
    }

    public function cerrar()
    {
        $this->create = false;
        $this->nombre = '';
        $this->identificador = '';
        $this->anio = '';
        $this->fecha_inicio = now();
        $this->fecha_final = now();
        $this->deshabilitar = false;
        $this->modeEditar = false;
    }

    public function modeList(){
        $this->modeEditar = false;
        $this->nombre = '';
        $this->identificador = '';
        $this->anio = '';
        $this->fecha_inicio = now();
        $this->fecha_final = now();
        $this->modeEditar = false;
    }
    public function register()
    {
        try{

            if($this->validate()){
                $periodo = new Periodo();

                $periodo->nombre = $this->nombre;
                $periodo->identificador = $this->identificador;
                $periodo->anio = $this->anio;
                $periodo->fecha_inicio = $this->fecha_inicio;
                $periodo->fecha_final = $this->fecha_final;


                $periodo->save();

                toastr()->success('Periodo creado exitosamente', 'Éxito', ['timeOut' => 5000]);
                $this->cerrar();

            } else {
                toastr()->success('Error al crear el periodo', 'Error', ['timeOut' => 5000]);
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

    public function modeDeshabilitar($id){
        $this->periodo = Periodo::find($id);
        $this->periodoName = $this->periodo->nombre;
        $this->deshabilitar = true;
    }

    public function eliminarPeriodo(){
        if($this->periodo){
            $this->periodo->delete();
            toastr()->warning('Periodo eliminado éxitosamente', 'Atención', ['timeOut' => 6000]);
            $this->deshabilitar = false;
        }
    }

    public function modeEdit($id){
        $this->periodo = Periodo::find($id);
        $this->nombre = $this->periodo->nombre;
        $this->identificador = $this->periodo->identificador;
        $this->anio = $this->periodo->anio;
        $this->fecha_inicio = $this->periodo->fecha_inicio;
        $this->fecha_final = $this->periodo->fecha_final;
        $this->modeEditar = true;
    }

    public function edit(){
        $this->validate();

        if($this->periodo){
            $this->periodo->update([
                'nombre' => $this->nombre,
                'identificador' => $this->identificador,
                'anio' => $this->anio,
                'fecha_inicio' => $this->fecha_inicio,
                'fecha_final' => $this->fecha_final,

            ]);
            toastr()->success('Periodo actualizado exitosamente', 'Éxito', ['timeOut' => 5000]);
            $this->modeEditar = false;
        }
    }
}
