<?php

namespace App\Livewire\Admin\Empleados;

use Livewire\Component;
use App\Models\Empleado;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class Empleados extends Component
{
    use WithoutUrlPagination;

    public $query ='';
    public $deshabilitar = false;
    public $detail = false;
    public $empeladoObjetc;
    public $empleadoSelect;
    public $isEditMode = false;

    public $nombre, $apellido, $cod_empleado, $identidad, $telefono, $email, $fecha_nacimiento, $estado_civil;

    public function render()
    {
        $empleados = Empleado::where('nombre', 'like', '%'.$this->query.'%')
                            ->orwhere('apellido', 'like', '%'.$this->query.'%')->get();

        return view('livewire.admin.empleados.empleados', ['empleado' => $empleados]);
    }

    public function modeDeshabilitar($id){
        $this->empeladoObjetc = Empleado::find($id);
        $this->empleadoSelect = $this->empeladoObjetc->nombre .' '. $this->empeladoObjetc->apellido;
        $this->deshabilitar = true;
    }

    public function modeList(){
        $this->deshabilitar = false;
        $this->detail = false;
        $this->isEditMode = false;

    }

    public function eliminarEmpleado(){
        if($this->empeladoObjetc){
            $this->empeladoObjetc->delete();
            toastr()->warning('Empleado eliminado éxitosamente', 'Atención', ['timeOut' => 6000]);
            $this->deshabilitar = false;
        }
    }

    public function modeDetail($id){
        $this->empeladoObjetc = Empleado::find($id);
        $this->empleadoSelect = $this->empeladoObjetc->nombre .' '. $this->empeladoObjetc->apellido;
        $this->detail = true;
    }

    public function modeEdit($id){
        $this->empeladoObjetc = Empleado::find($id);
        $this->nombre = $this->empeladoObjetc->nombre;
    	$this->apellido = $this->empeladoObjetc->apellido;
    	$this->identidad = $this->empeladoObjetc->identidad;
    	$this->cod_empleado = $this->empeladoObjetc->cod_empleado;
    	$this->telefono = $this->empeladoObjetc->telefono;
    	$this->email = $this->empeladoObjetc->email;
    	$this->fecha_nacimiento = $this->empeladoObjetc->fecha_nacimiento;
    	$this->estado_civil = $this->empeladoObjetc->estado_civil;

        $this->detail = false;
        $this->isEditMode = true;
    }
}
