<?php

namespace App\Livewire\Admin\Clases;

use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;
use App\Models\Clase;
use App\Models\Carrera;
use App\Models\CarreraClase;
use Illuminate\Database\QueryException;

class Clases extends Component
{
    public $codigo;
    public $asignatura;
    public $create = false;
    public $deshabilitar = false;
    public $modeEditar = false;
    public $clase;
    public $claseName;
    public $carrerasSeleccionadas = [];

    use WithoutUrlPagination;
    public $query ='';

    public function render()
    {
        $carreras = Carrera::all();
        $clases = Clase::where('asignatura', 'like', '%'.$this->query.'%')
                            ->orwhere('codigo', 'like', '%'.$this->query.'%')->get();
        return view('livewire.admin.clases.clases', ['clases' => $clases, 'carreras' => $carreras]);
    }

    public function rules()
    {
        return [
            'codigo' => 'required|unique:clases,codigo',
            'asignatura' => 'required',
            'carrerasSeleccionadas' => 'required|array|min:1',
        ];
    }

    public function messages()
    {
        return [
            'codigo.required' => 'El campo es requerido',
            'asignatura.required' => 'El campo es requerido',
            'codigo.unique' => 'El código ya esta en uso',
            'carrerasSeleccionadas' => 'Debes seleccionar al menos una carrera'
        ];
    }


    public function crear()
    {
        $this->create = true;
    }

    public function cerrar()
    {
        $this->create = false;
        $this->asignatura = '';
        $this->codigo = '';
        $this->deshabilitar = false;
        $this->modeEditar = false;
    }

    public function modeList(){
        $this->modeEditar = false;
        $this->asignatura = '';
        $this->codigo = '';
    }

    public function register()
    {
        try{

            if($this->validate()){
                $clase = new Clase();

                $clase->codigo = $this->codigo;
                $clase->asignatura = $this->asignatura;

                $clase->save();

                $clase->carreras()->sync($this->carrerasSeleccionadas);
                toastr()->success('Clase agregada exitosamente', 'Éxito', ['timeOut' => 5000]);
                $this->cerrar();

            } else {
                toastr()->success('Error al agregar la clase', 'Error', ['timeOut' => 5000]);
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
        $this->clase = Clase::find($id);
        $this->claseName = $this->clase->asignatura;
        $this->deshabilitar = true;
    }

    public function eliminarClase(){
        if($this->clase){
            $this->clase->delete();
            toastr()->warning('Clase eliminada éxitosamente', 'Atención', ['timeOut' => 6000]);
            $this->deshabilitar = false;
        }
    }

    public function modeEdit($id){
        $this->clase = Clase::find($id);
        $this->asignatura = $this->clase->asignatura;
        $this->codigo = $this->clase->codigo;
        $this->modeEditar = true;
    }

    public function edit(){
        $this->validate([
            'codigo' => 'required',
            'asignatura' => 'required',
        ]);

        if($this->clase){
            $this->clase->update([
                'codigo' => $this->codigo,
                'asignatura' => $this->asignatura,

            ]);
            toastr()->success('Clase actualizada exitosamente', 'Éxito', ['timeOut' => 5000]);
            $this->modeEditar = false;
        }
    }
}
