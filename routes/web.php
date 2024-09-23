<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\PlanAlimenticioController;



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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

// Ruta para el menú principal
Route::get('/home', function () {
    return view('home'); // Vista del menú
})->name('home');

Route::get('/perfil', [ProfileController::class, 'showProfile'])->name('profile.show');
Route::get('/pacientes', [PacienteController::class, 'index'])->name('pacientes.index');
route::get('/citas', [App\Http\Controllers\CitasController::class, 'index'])->name('citas.index');
Route::get('/planes-alimenticios', [PlanAlimenticioController::class, 'index'])->name('planes-alimenticios');

Route::get('/partial/perfil', [ProfileController::class, 'perfilPartial'])->name('partial.profile');
Route::get('/partial/pacientes', [PacienteController::class, 'pacientesPartial'])->name('partial.pacientes');
Route::get('/partial/citas', [App\Http\Controllers\CitasController::class, 'citasPartial'])->name('partial.citas');
route::get('/partial/perfil', [ProfileController::class, 'showProfile'])->name('partial.profile');
Route::get('/partial/planes-alimenticios', [PlanAlimenticioController::class, 'planAlimenticioPartial'])->name('partial.planes-alimenticios');