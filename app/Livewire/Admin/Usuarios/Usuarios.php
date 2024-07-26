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
    public $estado;
    public $modeChangeEstado = false;


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
        $this->modeChangeEstado = false;
    }

    public function eliminarUsuario(){
        if($this->user){
            $this->user->delete();
            toastr()->warning('Usuario eliminado éxitosamente', 'Atención', ['timeOut' => 6000]);
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
            $role = Role::find($this->role_id);
            if($role){
                $this->user->syncRoles([$role->name]);
                $this->changeRole = false;
            }

        }
    }

    public function modeEstado($id){
        $this->user = User::find($id);
        $this->username = $this->user->name;
        $this->estado = $this->user->active;
        $this->modeChangeEstado = true;
    }

    public function changeEstado(){
        if($this->estado == 1){
            $this->user->update(['active' => 0]);
            $this->modeChangeEstado = false;

        }else{
            $this->user->update(['active' => 1]);
            $this->modeChangeEstado = false;
        }
    }


}
