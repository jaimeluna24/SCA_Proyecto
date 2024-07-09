<?php

namespace App\Livewire\Admin\Docentes;

use Livewire\Component;
use App\Models\Docente;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class Docentes extends Component
{
    use WithoutUrlPagination;

    public $query ='';

    public function render()
    {
        $docentes = Docente::where('nombre', 'like', '%'.$this->query.'%')
                            ->orwhere('apellido', 'like', '%'.$this->query.'%')->with('sede')->get();

        return view('livewire.admin.docentes.docentes',['docentes' => $docentes]);
    }
}
