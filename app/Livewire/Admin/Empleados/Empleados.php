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

    public function render()
    {
        $empleados = Empleado::where('nombre', 'like', '%'.$this->query.'%')
                            ->orwhere('apellido', 'like', '%'.$this->query.'%')->get();

        return view('livewire.admin.empleados.empleados', ['empleado' => $empleados]);
    }
}
