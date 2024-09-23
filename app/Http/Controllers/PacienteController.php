<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PacienteController extends Controller
{
    public function index()
    {
        // Datos simulados de pacientes
        $pacientes = [
            [
                'nombre' => 'Juan Pérez',
                'foto' => 'path/to/photo1.jpg', // Reemplaza con la ruta a las fotos reales
                'peso' => '75 kg',
                'altura' => '1.70 m',
                'enfermedad' => 'Diabetes',
                'alergia' => 'Polen'
            ],
            [
                'nombre' => 'María López',
                'foto' => 'path/to/photo2.jpg',
                'peso' => '65 kg',
                'altura' => '1.60 m',
                'enfermedad' => 'Hipertensión',
                'alergia' => 'Ninguna'
            ],
            [
                'nombre' => 'Carlos García',
                'foto' => 'path/to/photo3.jpg',
                'peso' => '80 kg',
                'altura' => '1.75 m',
                'enfermedad' => 'Asma',
                'alergia' => 'Ácaros'
            ],
            [
                'nombre' => 'Ana Martínez',
                'foto' => 'path/to/photo4.jpg',
                'peso' => '55 kg',
                'altura' => '1.55 m',
                'enfermedad' => 'Artritis',
                'alergia' => 'Lácteos'
            ],
            [
                'nombre' => 'Pedro Fernández',
                'foto' => 'path/to/photo5.jpg',
                'peso' => '90 kg',
                'altura' => '1.80 m',
                'enfermedad' => 'Colesterol alto',
                'alergia' => 'Gluten'
            ],
        ];

        return view('pacientes.index', compact('pacientes'));
    }

    public function pacientesPartial()
    {
        // Datos simulados de pacientes
        $pacientes = [
            [
                'nombre' => 'Juan Pérez',
                'foto' => 'path/to/photo1.jpg', // Reemplaza con la ruta a las fotos reales
                'peso' => '75 kg',
                'altura' => '1.70 m',
                'enfermedad' => 'Diabetes',
                'alergia' => 'Polen'
            ],
            [
                'nombre' => 'María López',
                'foto' => 'path/to/photo2.jpg',
                'peso' => '65 kg',
                'altura' => '1.60 m',
                'enfermedad' => 'Hipertensión',
                'alergia' => 'Ninguna'
            ],
            [
                'nombre' => 'Carlos García',
                'foto' => 'path/to/photo3.jpg',
                'peso' => '80 kg',
                'altura' => '1.75 m',
                'enfermedad' => 'Asma',
                'alergia' => 'Ácaros'
            ],
            [
                'nombre' => 'Ana Martínez',
                'foto' => 'path/to/photo4.jpg',
                'peso' => '55 kg',
                'altura' => '1.55 m',
                'enfermedad' => 'Artritis',
                'alergia' => 'Lácteos'
            ],
            [
                'nombre' => 'Pedro Fernández',
                'foto' => 'path/to/photo5.jpg',
                'peso' => '90 kg',
                'altura' => '1.80 m',
                'enfermedad' => 'Colesterol alto',
                'alergia' => 'Gluten'
            ],
        ];
        // Retorna solo la vista parcial sin el layout
        return view('partials.pacientes', compact('pacientes'));
    }
}
