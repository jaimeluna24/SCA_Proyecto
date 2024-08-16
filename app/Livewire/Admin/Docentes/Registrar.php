<?php

namespace App\Livewire\Admin\Docentes;

use Livewire\Component;
use App\Models\Sede;
use App\Models\Docente;
use App\Models\Empleado;
use Illuminate\Database\QueryException;

class Registrar extends Component
{
    public $nombre;
    public $apellido;
    public $identidad, $email, $telefono, $fecha_nacimiento, $sede_id, $empleado_id;
    public $error = false;
    public $errorE = false;
    public $errorEx = false;


    public function render()
    {
        $sedes = Sede::all();
        $empleados = Empleado::all();
        return view('livewire.admin.docentes.registrar',['sedes' => $sedes, 'empleados' => $empleados]);
    }

    public function rules()
    {
        return [
            'empleado_id' => 'required',
            'sede_id' => 'required',
            'email' => 'required|unique:docentes,email',

        ];
    }

    public function messages()
    {
        return [
            'empleado_id' => 'Campo requerido',
            'sede_id' => 'Campo requerido',
            'email.unique' => 'El email ya esta en uso',
        ];
    }

    public function register()
    {
        try{
            $sede = sede::where('id', $this->sede_id)->first();
            $empleado = Empleado::where('id', $this->empleado_id)->first();
            $this->nombre = $empleado->nombre;
            $this->apellido = $empleado->apellido;
            $this->identidad = $empleado->identidad;
            $this->telefono = $empleado->telefono;
            $this->fecha_nacimiento = $empleado->fecha_nacimiento;
            $this->email = $empleado->email;

            $docent = Docente::where('empleado_id', $empleado->id)->first();

            $this->validate();

            if($sede){
                if($empleado){
                    if(!$docent){
                        $docente = new Docente();

                        $docente->nombre = $this->nombre;
                        $docente->apellido = $this->apellido;
                        $docente->identidad = $this->identidad;
                        $docente->email = $this->email;
                        $docente->telefono = $this->telefono;
                        $docente->fecha_nacimiento = $this->fecha_nacimiento;
                        $docente->sede_id = $this->sede_id;
                        $docente->empleado_id = $this->empleado_id;

                        $docente->save();
                        toastr()->success('Docente creado exitosamente', 'Éxito', ['timeOut' => 5000]);

                        return redirect(route('docentes'));
                    }else{
                        $this->errorEx = true;
                        toastr()->error('El empleado ya tiene un docente asignado', 'Error', ['timeOut' => 5000]);
                    }
                }else {
                    $this->errorE = true;
                    toastr()->error('Empleado incorrecto', 'Error', ['timeOut' => 5000]);
                }

            } else {
                $this->error = true;
                toastr()->error('Sede Incorrecta', 'Error', ['timeOut' => 5000]);
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
