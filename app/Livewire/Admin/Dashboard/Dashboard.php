<?php

namespace App\Livewire\Admin\Dashboard;

use Livewire\Component;
use App\Models\Docente;
use App\Models\Solicitud;
use App\Models\User;
use App\Models\Horario;


class Dashboard extends Component
{
    public $totalSolicitudes;
    public $totalHorarios;
    public $totalDocentes;
    public $totalUsuarios;

    public function mount()
    {
        // Obtener el total de solicitudes con estado_id = 1
        $this->totalSolicitudes = Solicitud::where('estado_id', 1)->count();
        $this->totalHorarios =Horario::whereHas('periodo', function ($query) {
            $query->where('active', 1);
        })->count();
        $this->totalDocentes = Docente::count();
        $this->totalUsuarios = User::count();


    }
    public function render()
    {
        return view('livewire.admin.dashboard.dashboard');
    }
}
