<?php

namespace App\Livewire\Admin\Usuarios;

use App\Models\Empleado;
use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Illuminate\Database\QueryException;

class Registrar extends Component
{
    public $nombre;
    public $apellido;
    public $name, $email, $password, $empleado, $role, $empleado_id;
    public $errorEmpleado = false;

    public function rules()
    {
        return [
            'name' => 'required|min:8|unique:users,name',
            'email' => 'required|unique:users,email',
            'password' => 'required|min:8'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El usuarios es requerido.',
            'name.unique' => 'El usuario ya esta en uso',
            'name.min' => 'El usuario debe tener minimo 8 caracteres.',
            'password' => 'La contraseña debe tener minimo 8 caracteres',
            'email.unique' => 'El email ya esta en uso',
        ];
    }

    public function render()
    {
        $empleados = Empleado::all();
        $roles = Role::all();
        return view('livewire.admin.usuarios.registrar', ['empleados' => $empleados, 'roles' => $roles]);
    }

    public function register()
    {
        try{
            $empleado = Empleado::whereRaw("CONCAT(nombre, ' ', apellido) LIKE '%$this->empleado%'")->first();
            $this->empleado_id = $empleado->id;
            $user = User::where('empleado_id', $empleado->id)->first();
            $this->nombre = $empleado->nombre;
            $this->apellido = $empleado->apellido;

            $this->validate();
            if(!$user){
                $usuario = new User();

                $usuario->nombre = $this->nombre;
                $usuario->apellido = $this->apellido;
                $usuario->name = $this->name;
                $usuario->email = $this->email;
                $usuario->password = Hash::make($this->password);
                $usuario->empleado_id = $empleado->id;

                $usuario->save();

                $role = Role::where('name', $this->role)->first();


                $usuario->roles()->attach($role->id);

                return redirect(route('usuarios'));
                toastr()->success('Usuario creado exitosamente', 'Éxito', ['timeOut' => 6000]);

            }else{
                $this->errorEmpleado = true;
                toastr()->error('El empleado ' . $empleado->nombre .' '. $empleado->apellido . ' ya tiene asignado un usuario', 'Error', ['timeOut' => 5000]);
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
