<?php

namespace App\Livewire\Admin\Aulas;

use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;
use App\Models\Aula;
use Illuminate\Database\QueryException;

class Aulas extends Component
{
    public $nombre;
    public $capacidad;
    public $disponible;
    public $observacion;
    public $create = false;

    use WithoutUrlPagination;

    public $query ='';

    public function render()
    {
        $aulas = Aula::where('nombre', 'like', '%'.$this->query.'%')->get();
        return view('livewire.admin.aulas.aulas', ['aulas' => $aulas]);
    }

    public function rules()
    {
        return [
            'nombre' => 'required|unique:aulas,nombre',
            'capacidad' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'El campo es requerido',
            'nombre.unique' => 'El aula ya existe',
            'capacidad.required' => 'El campo es requerido',
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
        $this->capacidad = '';
        $this->disponible = null;
        $this->observacion = '';
    }

    public function register()
    {
        try{
            if($this->validate()){
                $aula = new Aula();

                $aula->nombre = $this->nombre;
                $aula->capacidad = $this->capacidad;
                $aula->disponible = $this->disponible;
                $aula->observacion = $this->observacion;

                $aula->save();

                toastr()->success('Aula creada éxitosamente', 'Éxito', ['timeOut' => 5000]);
                $this->cerrar();

            } else {
                toastr()->success('Error al crear el aula', 'Error', ['timeOut' => 5000]);
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
