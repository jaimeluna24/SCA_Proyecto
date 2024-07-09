<?php

namespace App\Livewire\Admin\Usuarios;

use Livewire\Component;
use App\Models\User;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class Usuarios extends Component
{
    use WithoutUrlPagination;

    public $query ='';

    public function render()
    {
        $usuarios = User::where('nombre', 'like', '%'.$this->query.'%')
                        ->orwhere('apellido', 'like', '%'.$this->query.'%')->get();

        return view('livewire.admin.usuarios.usuarios', ['usuarios' => $usuarios]);
    }
}
