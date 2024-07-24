<?php

namespace App\Livewire\Admin\Usuarios;

use Livewire\Component;
use App\Models\User;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;
use Spatie\Permission\Models\Role;

class Usuarios extends Component
{
    use WithoutUrlPagination;

    public $query ='';
    public $deshabilitar = false;
    public $changeRole = false;
    public $user;
    public $role;
    public $role_id;
    public $username;
    public $rolActual;

    public function render()
    {
        $usuarios = User::where('nombre', 'like', '%'.$this->query.'%')
                        ->orwhere('apellido', 'like', '%'.$this->query.'%')->get();
        $roles = Role::all();
        return view('livewire.admin.usuarios.usuarios', ['usuarios' => $usuarios, 'roles' => $roles]);
    }

    public function modeDeshabilitar($id){
        $this->user = User::find($id);
        $this->username = $this->user->name;
        $this->deshabilitar = true;
    }

    public function modeList(){
        $this->deshabilitar = false;
        $this->changeRole = false;
    }

    public function eliminarUsuario(){
        if($this->user){
            $this->user->delete();
            toastr()->warning('Usuario deshabilitado éxitosamente', 'Atención', ['timeOut' => 6000]);
            $this->deshabilitar = false;
        }
    }

    public function modeChangeRole($id){
        $this->user = User::find($id);
        $rolActual = $this->user->getRoleNames();
        $this->rolActual = $rolActual->implode(', ');
        $this->username = $this->user->name;
        $this->changeRole = true;
    }

    public function cambiarRole(){
        if($this->user){
            $role = Role::where('name', $this->rolActual)->first();
            $this->user->syncRoles([$role->id]);
            if($this->user->syncRoles([$role->id])){
                $this->changeRole = false;
            }
        }
    }


}
