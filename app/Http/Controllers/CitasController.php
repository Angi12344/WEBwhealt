<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CitasController extends Controller
{
    public function index()
    {
        // Simulación de 10 citas pendientes
        $citas = [
            ['paciente' => 'Jaime Herrera', 'razon' => 'Consulta general', 'estado' => 'Cita pendiente'],
            ['paciente' => 'Natalia Romero', 'razon' => 'Revisión anual', 'estado' => 'Cita pendiente'],
            ['paciente' => 'Jimena Fernandez', 'razon' => 'Chequeo de presión', 'estado' => 'Cita pendiente'],
            ['paciente' => 'Esther Martinez', 'razon' => 'Consulta de seguimiento', 'estado' => 'Cita pendiente'],
            ['paciente' => 'Julia Sanchez', 'razon' => 'Consulta nutricional', 'estado' => 'Cita pendiente'],
            ['paciente' => 'Carlos Perez', 'razon' => 'Examen de sangre', 'estado' => 'Cita pendiente'],
            ['paciente' => 'Ana Gomez', 'razon' => 'Consulta de dolor', 'estado' => 'Cita pendiente'],
            ['paciente' => 'Luis Hernandez', 'razon' => 'Consulta de especialidad', 'estado' => 'Cita pendiente'],
            ['paciente' => 'Marta Suarez', 'razon' => 'Revisión de resultados', 'estado' => 'Cita pendiente'],
            ['paciente' => 'Pedro Lopez', 'razon' => 'Consulta pediátrica', 'estado' => 'Cita pendiente'],
        ];

        return view('citas.index', compact('citas'));
    }

    public function citasPartial()
{
    // Simulación de 10 citas pendientes (como ya tienes en tu index)
    $citas = [
        ['paciente' => 'Jaime Herrera', 'razon' => 'Consulta general', 'estado' => 'Cita pendiente'],
        ['paciente' => 'Natalia Romero', 'razon' => 'Revisión anual', 'estado' => 'Cita pendiente'],
        ['paciente' => 'Jimena Fernandez', 'razon' => 'Chequeo de presión', 'estado' => 'Cita pendiente'],
        ['paciente' => 'Esther Martinez', 'razon' => 'Consulta de seguimiento', 'estado' => 'Cita pendiente'],
        ['paciente' => 'Julia Sanchez', 'razon' => 'Consulta nutricional', 'estado' => 'Cita pendiente'],
        ['paciente' => 'Carlos Perez', 'razon' => 'Examen de sangre', 'estado' => 'Cita pendiente'],
        ['paciente' => 'Ana Gomez', 'razon' => 'Consulta de dolor', 'estado' => 'Cita pendiente'],
        ['paciente' => 'Luis Hernandez', 'razon' => 'Consulta de especialidad', 'estado' => 'Cita pendiente'],
        ['paciente' => 'Marta Suarez', 'razon' => 'Revisión de resultados', 'estado' => 'Cita pendiente'],
        ['paciente' => 'Pedro Lopez', 'razon' => 'Consulta pediátrica', 'estado' => 'Cita pendiente'],
    ];

    // Retorna una vista parcial para ser cargada en el contenido dinámico
    return view('partials.citas', compact('citas'));
}

}
