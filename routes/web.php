<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('vistas.admin.dashboard')->name('inicio');
// });

Route::view('/', "vistas.admin.dashboard")->middleware('auth')->name('inicio');

//Modulo de Login
Route::view('/login', "Auth.login")->name('login');
Route::view('/registro', "register")->name('register');
Route::view('/inicio', "vistas.admin.dashboard")->middleware('auth')->name('inicio');

Route::post('/validar-registro',[LoginController::class, 'register'])->name('validar-registro');
Route::post('/inicia-sesion',[LoginController::class, 'login'])->name('inicia-sesion');
Route::get('/logout',[LoginController::class, 'logout'])->name('logout');

//Modulo de usuarios
Route::view('/usuarios', "vistas.admin.usuarios.usuarios")->middleware('auth')->name('usuarios');
Route::view('/usuarios/registrar', "vistas.admin.usuarios.registrar")->middleware('auth')->name('usuarios-registrar');


//Modulo de empelados
Route::view('/empleados', "vistas.admin.empleados.empleados")->middleware('auth')->name('empleados');
Route::view('/empleados/registrar', "vistas.admin.empleados.registrar")->middleware('auth')->name('empleados-registrar');

//Modulo de docentes
Route::view('/docentes', "vistas.admin.docentes.docentes")->middleware('auth')->name('docentes');
Route::view('/docentes/registrar', "vistas.admin.docentes.registrar")->middleware('auth')->name('docentes-registrar');

//Modulo general Roles, Aulas, Periodos
Route::view('/roles', "vistas.admin.general.roles")->middleware('auth')->name('roles');
Route::view('/aulas', "vistas.admin.general.aulas")->middleware('auth')->name('aulas');
Route::view('/periodos', "vistas.admin.general.periodos")->middleware('auth')->name('periodos');

//Módulo de solicitudes
Route::view('/solicitudes/crear', "vistas.docente.solicitudes.crear")->middleware('auth')->name('solicitudes-crear');
Route::view('/solicitudes', "vistas.docente.solicitudes.mis-solicitudes")->middleware('auth')->name('mis-solicitudes');

Route::view('/solicitudes-pendientes', "vistas.admin.solicitudes.solicitudes-pendientes")->middleware('auth')->name('solicitudes-pendientes');
Route::view('/solicitudes/historial', "vistas.admin.solicitudes.historial")->middleware('auth')->name('historial-solicitudes');



