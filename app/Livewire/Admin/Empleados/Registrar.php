<?php

namespace App\Livewire\Admin\Empleados;

use Livewire\Component;
use Illuminate\Database\QueryException;
use App\Models\Empleado;


class Registrar extends Component
{
    public $nombre;
    public $apellido;
    public $identidad, $email, $cod_empleado, $telefono, $estado_civil, $fecha_nacimiento;
    public $error = false;

    public function render()
    {
        return view('livewire.admin.empleados.registrar');
    }

    public function rules()
    {
        return [
            'nombre' => 'required',
            'apellido' => 'required',
            'identidad' => ['required', 'size:15', 'regex:/^\d{4}-\d{4}-\d{5}$/', 'unique:empleados,identidad'],
            'cod_empleado' => 'required|unique:empleados,cod_empleado',
            'email' => 'required|unique:empleados,email',
            'telefono' => ['required', 'size:9', 'regex:/^\d{4}-\d{4}$/', 'unique:empleados,telefono'],
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

    public function register()
    {
        try{

            $this->validate();

            if($this->estado_civil == 'Soltero' || $this->estado_civil == 'Casado' ){
                $empleado = new Empleado();

                $empleado->nombre = $this->nombre;
                $empleado->apellido = $this->apellido;
                $empleado->identidad = $this->identidad;
                $empleado->cod_empleado = $this->cod_empleado;
                $empleado->email = $this->email;
                $empleado->telefono = $this->telefono;
                $empleado->fecha_nacimiento = $this->fecha_nacimiento;
                $empleado->estado_civil = $this->estado_civil;

                $empleado->save();
                toastr()->success('empleado creado exitosamente', 'Éxito', ['timeOut' => 5000]);

                return redirect(route('empleados'));
            } else {
                $this->error = true;
                toastr()->error('Estado civil incorrecto', 'Error', ['timeOut' => 5000]);
            }


        }catch (QueryException $e){
            $errorCode = $e->errorInfo[1];
            if ($errorCode == 1062) {
                toastr()->error('El email ya esta en uso', 'Error', ['timeOut' => 5000]);

            } elseif ($errorCode == 1451) {
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
