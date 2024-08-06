<?php

namespace App\Livewire\Admin\Aulas;

use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;
use App\Models\Aula;
use App\Models\EstadoAula;

use Illuminate\Database\QueryException;

class Aulas extends Component
{
    public $nombre;
    public $capacidad;
    public $estado_id;
    public $observacion;
    public $create = false;
    public $modeEstado = false;
    public $aula;
    public $aulaName;
    public $estado;
    public $deshabilitar = false;
    public $modeEditar = false;


    use WithoutUrlPagination;

    public $query ='';

    public function render()
    {
        $estados = EstadoAula::all();
        $aulas = Aula::where('nombre', 'like', '%'.$this->query.'%')->get();
        return view('livewire.admin.aulas.aulas', ['aulas' => $aulas, 'estados' => $estados]);
    }

    public function rules()
    {
        return [
            'nombre' => 'required|unique:aulas,nombre',
            'capacidad' => 'required',
            'estado_id' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'El campo es requerido',
            'estado_id.required' => 'El campo es requerido',

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
        $this->estado_id = null;
        $this->observacion = '';
        $this->deshabilitar = false;
        $this->modeEstado = false;
    }

    public function modeList(){
        $this->modeEditar = false;
        $this->nombre = '';
        $this->capacidad = '';
        $this->estado_id = null;
        $this->observacion = '';
    }

    public function register()
    {
        try{
            if($this->validate()){
                $aula = new Aula();

                $aula->nombre = $this->nombre;
                $aula->capacidad = $this->capacidad;
                $aula->estado_id = $this->estado_id;
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

    public function modeChangeEstado($id){
        $this->aula = Aula::find($id);
        $this->aulaName = $this->aula->nombre;
        $this->modeEstado = true;
    }

    public function changeEstado(){
            $this->aula->update(['estado_id' => $this->estado_id]);
            $this->modeEstado = false;
            toastr()->warning('Estado de Aula cambiado', 'Éxito', ['timeOut' => 5000]);
    }

    public function modeDeshabilitar($id){
        $this->aula = Aula::find($id);
        $this->aulaName = $this->aula->nombre;
        $this->deshabilitar = true;
    }

    public function eliminarAula(){
        if($this->aula){
            $this->aula->delete();
            toastr()->warning('Aula eliminada éxitosamente', 'Atención', ['timeOut' => 6000]);
            $this->deshabilitar = false;
        }
    }

    public function modeEdit($id){
        $this->aula = Aula::find($id);
        $this->nombre = $this->aula->nombre;
        $this->capacidad = $this->aula->capacidad;
        $this->estado_id = $this->aula->estado_id;
        $this->observacion = $this->aula->observacion;
        $this->modeEditar = true;
    }

    public function edit(){
        $this->validate([
            'nombre' => 'required',
            'capacidad' => 'required',
            'estado_id' => 'required',
        ]);

        if($this->aula){
            $this->aula->update([
                'nombre' => $this->nombre,
                'capacidad' => $this->capacidad,
                'estado_id' => $this->estado_id,
                'observacion' => $this->observacion,
            ]);
            toastr()->success('Aula actualizada exitosamente', 'Éxito', ['timeOut' => 5000]);
            $this->modeEditar = false;
        }
    }
}
