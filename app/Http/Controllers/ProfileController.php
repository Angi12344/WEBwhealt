<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function showProfile()
    {
        // Simulando los datos del usuario (puedes cambiar estos valores)
        $user = [
            'nombre' => 'Jaime Herrera',
            'apellido' => 'Fernandez',
            'fecha_nacimiento' => '1990-01-01',
            'correo' => 'jaime.herrera@hotmail.com',
            'telefono' => '555-1234',
            'direccion_clinica' => 'Avenida Siempre Viva 742',
            'especialidad' => 'Nutrición Deportiva',
            'usuario' => 'jherrera'
        ];

        return view('profile.show', compact('user'));
    }
 
}
