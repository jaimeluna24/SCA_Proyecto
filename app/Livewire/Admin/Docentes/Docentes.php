<?php

namespace App\Livewire\Admin\Docentes;

use Livewire\Component;
use App\Models\Docente;
use App\Models\Sede;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class Docentes extends Component
{
    use WithoutUrlPagination;

    public $query ='';
    public $deshabilitar = false;
    public $detail = false;
    public $modeChangeEstado = false;
    public $docenteObjetc;
    public $docenteSelect;
    public $isEditMode = false;
    public $estado;
    public $nombre, $apellido, $identidad, $telefono, $email, $fecha_nacimiento, $sede_id;

    public function render()
    {
        $sedes = Sede::all();
        $docentes = Docente::where('nombre', 'like', '%'.$this->query.'%')
                            ->orwhere('apellido', 'like', '%'.$this->query.'%')->with('sede')->get();

        return view('livewire.admin.docentes.docentes',['docentes' => $docentes, 'sedes' => $sedes]);
    }

    // public function modeDeshabilitar($id){
    //     $this->docenteObjetc = Docente::find($id);
    //     $this->docenteSelect = $this->docenteObjetc->nombre .' '. $this->docenteObjetc->apellido;
    //     $this->deshabilitar = true;
    // }

    public function modeEstado($id){
        $this->docenteObjetc = Docente::find($id);
        $this->docenteSelect = $this->docenteObjetc->nombre . ' '. $this->docenteObjetc->apellido;
        $this->estado = $this->docenteObjetc->active;
        $this->modeChangeEstado = true;
    }

    public function changeEstados(){
        if($this->estado == 1){
            $this->docenteObjetc->update(['active' => 0]);
            $this->modeChangeEstado = false;
            toastr()->warning('Docente inactivado exitosamente', 'Éxito', ['timeOut' => 5000]);
        }else{
            $this->docenteObjetc->update(['active' => 1]);
            $this->modeChangeEstado = false;
            toastr()->warning('Docente activado exitosamente', 'Éxito', ['timeOut' => 5000]);

        }
    }

    public function modeList(){
        $this->deshabilitar = false;
        $this->detail = false;
        $this->isEditMode = false;
        $this->modeChangeEstado = false;

    }

    public function modeDetail($id){
        $this->docenteObjetc = Docente::find($id);
        $this->docenteSelect = $this->docenteObjetc->nombre .' '. $this->docenteObjetc->apellido;
        $this->detail = true;
    }

    public function modeEdit($id){
        $this->docenteObjetc = Docente::find($id);
        $this->nombre = $this->docenteObjetc->nombre;
    	$this->apellido = $this->docenteObjetc->apellido;
    	$this->identidad = $this->docenteObjetc->identidad;
    	$this->telefono = $this->docenteObjetc->telefono;
    	$this->email = $this->docenteObjetc->email;
    	$this->fecha_nacimiento = $this->docenteObjetc->fecha_nacimiento;
        $this->sede_id = $this->docenteObjetc->sede->id;

        $this->detail = false;
        $this->isEditMode = true;
    }


    public function rules()
    {
        return [
            'nombre' => 'required',
            'apellido' => 'required',
            'identidad' => ['required', 'regex:/^\d{4}-\d{4}-\d{5}$/', 'unique:docentes,identidad'],
            'email' => 'required|unique:docentes,email',
            'telefono' => ['required', 'regex:/^\d{4}-\d{4}$/', 'unique:docentes,telefono'],
            'fecha_nacimiento' => 'before:today',
            'sede_id' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'identidad.unique' => 'La identidad pertenece a otro docente.',
            'identidad.regex' => 'Formato esperado: "0000-0000-00000"',
            'email.unique' => 'El email ya esta en uso',
            'telefono.unique' => 'El telefono ya pertenece a un empleado',
            'telefono.regex' => 'Formato esperado: "1234-5678"',
            'fecha_nacimiento.before' => 'La fecha debe ser menor a la actual',
            'sede_id' => 'Campo requerido'
        ];
    }

    public function editar(){
        $this->validate();
        if($this->docenteObjetc){
            $this->docenteObjetc->update([
                'nombre' => $this->nombre,
                'apellido' => $this->apellido,
                'identidad' => $this->identidad,
                'sede_id' => $this->sede_id,
                'telefono' => $this->telefono,
                'email' => $this->email,
                'fecha_nacimiento' => $this->fecha_nacimiento,
            ]);
            toastr()->success('Docente actualizado exitosamente', 'Éxito', ['timeOut' => 5000]);
            $this->isEditMode = false;
        }
    }

}
