<?php

namespace App\Livewire\Admin\Roles;

use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;
use Spatie\Permission\Models\Role;
use Illuminate\Database\QueryException;


class Roles extends Component
{
    public $name;
    public $descripcion;
    public $create = false;

    use WithoutUrlPagination;

    public $query ='';

    public function render()
    {
        $roles = Role::where('name', 'like', '%'.$this->query.'%')->get();
        return view('livewire.admin.roles.roles', ['roles' => $roles]);
    }

    public function rules()
    {
        return [
            'name' => 'required|unique:roles,name',
            'descripcion' => 'required|min:8',
        ];
    }

    public function messages()
    {
        return [
            'name.unique' => 'El rol ya éxiste',
            'name.required' => 'El campo es requerido',
            'descripcion.min' => 'La descripción es muy corta',
            'descripcion.required' => 'El campo es requerido',
        ];
    }

    public function crear()
    {
        $this->create = true;
    }

    public function cerrar()
    {
        $this->create = false;
        $this->name = '';
        $this->descripcion = '';
    }

    public function register()
    {
        try{

            if($this->validate()){
                $role = new Role();

                $role->name = $this->name;
                $role->descripcion = $this->descripcion;

                $role->save();

                toastr()->success('Rol creado exitosamente', 'Éxito', ['timeOut' => 5000]);

                // return redirect(route('docentes'));
            } else {
                toastr()->success('Error al crear el rol', 'Error', ['timeOut' => 5000]);
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
