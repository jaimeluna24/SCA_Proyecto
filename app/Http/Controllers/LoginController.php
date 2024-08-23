<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function register(Request $request)
    {
        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        Auth::login($user);

        return redirect(route('inicio'));
    }



    public function login(Request $request)
{
    $credentials = [
        "email" => $request->email,
        "password" => $request->password,
    ];

    $remember = $request->has('remember') ? true : false;

    if (Auth::attempt($credentials, $remember)) {
        $request->session()->regenerate();
        $user = Auth::user();
         // Compara la contraseña actual con la que deseas
         if (Hash::check('12345678', $user->password)) {
            session()->flash('message', 'Necesitas cambiar tu contraseña.');
            return redirect()->route('change-password'); // Redirige a la página de cambio de contraseña
        }



        return redirect()->intended(route('inicio'));
    } else {
        // Almacenar el mensaje de error en la sesión
        return redirect('login')->withErrors([
            'email' => 'Las credenciales no son correctas. Por favor, verifica tu correo electrónico y contraseña.',
        ]);
    }
}

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('login'));
    }

}
