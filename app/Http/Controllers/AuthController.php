<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showRegisterForm()
    {
        $localidades = $this->getLocalidades(); // Obteniendo estados de México
        return view('auth.register', compact('localidades'));
    }

    public function register(Request $request)
    {
        // Validación y registro simulado por ahora
        return redirect()->route('login');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Autenticación simulada por ahora
        return redirect()->route('home');
    }

    private function getLocalidades()
    {
        return [
            'Aguascalientes', 'Baja California', 'Baja California Sur', 'Campeche', 'Chiapas', 
            'Chihuahua', 'Ciudad de México', 'Coahuila', 'Colima', 'Durango', 
            'Estado de México', 'Guanajuato', 'Guerrero', 'Hidalgo', 'Jalisco', 
            'Michoacán', 'Morelos', 'Nayarit', 'Nuevo León', 'Oaxaca', 
            'Puebla', 'Querétaro', 'Quintana Roo', 'San Luis Potosí', 'Sinaloa', 
            'Sonora', 'Tabasco', 'Tamaulipas', 'Tlaxcala', 'Veracruz', 
            'Yucatán', 'Zacatecas'
        ];
    }
}
