<?php

namespace App\Livewire\Admin\CambiarContraseña;

use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class CambiarContraseña extends Component
{
    public $current_password;
    public $new_password;
    public $confirm_password;

    protected $rules = [
        'current_password' => 'required',
        'new_password' => 'required|min:8|confirmed',
    ];

    public function updatePassword()
    {
        $this->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:8',
            'confirm_password' => 'required|same:new_password',
        ]);

        $user = User::find(Auth::id());

        // Verificar si la contraseña actual coincide
        if (!Hash::check($this->current_password, $user->password)) {
            $this->addError('current_password', 'La contraseña actual no es correcta.');
            return;
        }

        // Actualizar la contraseña
        $user->password = Hash::make($this->new_password);
        $user->save();

        // Limpiar los campos
        $this->reset(['current_password', 'new_password', 'confirm_password']);

        // Enviar mensaje de éxito
        toastr()->success('Cambio de contraseña exitoso', 'Éxito', ['timeOut' => 5000]);
        return redirect()->route('inicio');
    }

    public function render()
    {

        return view('livewire.admin.cambiar-contraseña.cambiar-contraseña');
    }
}
