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

    public function rules()
    {
        return [
            'nombre' => 'required',
            'apellido' => 'required',
            'identidad' => ['required', 'size:15', 'regex:/^\d{4}-\d{4}-\d{5}$/'],
            'cod_empleado' => 'required',
            'email' => 'required',
            'telefono' => ['required', 'size:9', 'regex:/^\d{4}-\d{4}$/'],
            'fecha_nacimiento' => 'before:today'
        ];
    }

    public function messages()
    {
        return [
            'identidad.unique' => 'La identidad pertenece a otro empleado.',
            'identidad.size' => 'La identidad debe ser de 15 caracteres.',
            'identidad.regex' => 'Formato esperado: "0000-0000-00000"',
            'cod_empleado.unique' => 'El código ya esta en uso',
            'email.unique' => 'El email ya esta en uso',
            'telefono.unique' => 'El telefono ya pertenece a un empleado',
            'telefono.size' => 'El telefono debe tener 9 caracteres',
            'telefono.regex' => 'Formato esperado: "1234-5678"',
            'fecha_nacimiento.before' => 'La fecha debe ser menor a la actual'
        ];
    }

    public function editar(){
        $this->validate();
        if($this->empeladoObjetc){
            $this->empeladoObjetc->update([
                'nombre' => $this->nombre,
                'apellido' => $this->apellido,
                'identidad' => $this->identidad,
                'cod_empleado' => $this->cod_empleado,
                'telefono' => $this->telefono,
                'estado_civil' => $this->estado_civil,
                'email' => $this->email,
                'fecha_nacimiento' => $this->fecha_nacimiento,
            ]);
            toastr()->success('Empleado actualizado exitosamente', 'Éxito', ['timeOut' => 5000]);
            $this->isEditMode = false;
        }
    }
}
