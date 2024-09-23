<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlanAlimenticioController extends Controller
{
    public function index()
    {
        // Simulación de un plan alimenticio ya existente
        $planAlimenticio = [
            'Lunes' => [
                'Desayuno' => 'Sandwich de jamón (250 kcal)',
                'Colación' => 'Yogurt con granola (150 kcal)',
                'Almuerzo' => 'Pechuga de pollo con ensalada (400 kcal)',
                'Cena' => 'Batido de frutas (200 kcal)',
            ],
            'Martes' => [
                'Desayuno' => 'Avena con plátano (300 kcal)',
                'Colación' => 'Galletas de arroz (100 kcal)',
                'Almuerzo' => 'Filete de pescado con verduras (350 kcal)',
                'Cena' => 'Ensalada mixta (180 kcal)',
            ],
            'Miércoles' => [
                'Desayuno' => 'Huevos revueltos con jamón (320 kcal)',
                'Colación' => 'Nueces y almendras (200 kcal)',
                'Almuerzo' => 'Carne asada con papa (500 kcal)',
                'Cena' => 'Sopa de verduras (150 kcal)',
            ],
            'Jueves' => [
                'Desayuno' => 'Tostadas de aguacate (280 kcal)',
                'Colación' => 'Fruta picada (100 kcal)',
                'Almuerzo' => 'Arroz con pollo (450 kcal)',
                'Cena' => 'Sándwich de atún (230 kcal)',
            ],
            'Viernes' => [
                'Desayuno' => 'Pan integral con mermelada (220 kcal)',
                'Colación' => 'Barra de proteína (150 kcal)',
                'Almuerzo' => 'Tacos de pescado (400 kcal)',
                'Cena' => 'Tortilla de huevo con espinacas (180 kcal)',
            ],
            'Sábado' => [
                'Desayuno' => 'Panqueques con miel (350 kcal)',
                'Colación' => 'Batido de proteína (200 kcal)',
                'Almuerzo' => 'Pizza de vegetales (500 kcal)',
                'Cena' => 'Quesadilla de pollo (250 kcal)',
            ],
            'Domingo' => [
                'Desayuno' => 'Cereal con leche (300 kcal)',
                'Colación' => 'Frutos secos (150 kcal)',
                'Almuerzo' => 'Hamburguesa de carne (600 kcal)',
                'Cena' => 'Sopa de fideos (180 kcal)',
            ]
        ];

        // Enviamos el plan alimenticio simulado a la vista
        return view('planes-alimenticios', compact('planAlimenticio'));
    }

    public function planAlimenticioPartial()
    {
         // Simulación de un plan alimenticio ya existente
         $planAlimenticio = [
            'Lunes' => [
                'Desayuno' => 'Sandwich de jamón (250 kcal)',
                'Colación' => 'Yogurt con granola (150 kcal)',
                'Almuerzo' => 'Pechuga de pollo con ensalada (400 kcal)',
                'Cena' => 'Batido de frutas (200 kcal)',
            ],
            'Martes' => [
                'Desayuno' => 'Avena con plátano (300 kcal)',
                'Colación' => 'Galletas de arroz (100 kcal)',
                'Almuerzo' => 'Filete de pescado con verduras (350 kcal)',
                'Cena' => 'Ensalada mixta (180 kcal)',
            ],
            'Miércoles' => [
                'Desayuno' => 'Huevos revueltos con jamón (320 kcal)',
                'Colación' => 'Nueces y almendras (200 kcal)',
                'Almuerzo' => 'Carne asada con papa (500 kcal)',
                'Cena' => 'Sopa de verduras (150 kcal)',
            ],
            'Jueves' => [
                'Desayuno' => 'Tostadas de aguacate (280 kcal)',
                'Colación' => 'Fruta picada (100 kcal)',
                'Almuerzo' => 'Arroz con pollo (450 kcal)',
                'Cena' => 'Sándwich de atún (230 kcal)',
            ],
            'Viernes' => [
                'Desayuno' => 'Pan integral con mermelada (220 kcal)',
                'Colación' => 'Barra de proteína (150 kcal)',
                'Almuerzo' => 'Tacos de pescado (400 kcal)',
                'Cena' => 'Tortilla de huevo con espinacas (180 kcal)',
            ],
            'Sábado' => [
                'Desayuno' => 'Panqueques con miel (350 kcal)',
                'Colación' => 'Batido de proteína (200 kcal)',
                'Almuerzo' => 'Pizza de vegetales (500 kcal)',
                'Cena' => 'Quesadilla de pollo (250 kcal)',
            ],
            'Domingo' => [
                'Desayuno' => 'Cereal con leche (300 kcal)',
                'Colación' => 'Frutos secos (150 kcal)',
                'Almuerzo' => 'Hamburguesa de carne (600 kcal)',
                'Cena' => 'Sopa de fideos (180 kcal)',
            ]
        ];
        // Retorna solo la vista parcial sin el layout
        return view('partials.planes-alimenticios', compact('planAlimenticio'));
        
    }
}

