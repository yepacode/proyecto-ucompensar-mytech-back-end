<?php

namespace Database\Seeders;

use App\Models\Estadistica;
use Illuminate\Database\Seeder;

class EstadisticaSeeder extends Seeder
{
    public function run(): void
    {
        $estadisticas = [
            ['numero' => '7+', 'texto' => 'Países', 'orden' => 1],
            ['numero' => '50+', 'texto' => 'Proyectos Entregados', 'orden' => 2],
            ['numero' => '98%', 'texto' => 'Satisfacción del Cliente', 'orden' => 3],
            ['numero' => '30+', 'texto' => 'Clientes Activos', 'orden' => 4],
            ['numero' => '15+', 'texto' => 'Tecnologías Dominadas', 'orden' => 5],
            ['numero' => '24/7', 'texto' => 'Soporte Técnico', 'orden' => 6],
            ['numero' => '5+', 'texto' => 'Años de Experiencia', 'orden' => 7],
            ['numero' => '12', 'texto' => 'Miembros del Equipo', 'orden' => 8],
            ['numero' => '100+', 'texto' => 'Repositorios en GitHub', 'orden' => 9],
            ['numero' => '40+', 'texto' => 'APIs Desarrolladas', 'orden' => 10],
            ['numero' => '99.9%', 'texto' => 'Uptime Garantizado', 'orden' => 11],
            ['numero' => '3', 'texto' => 'Premios Obtenidos', 'orden' => 12],
            ['numero' => '500+', 'texto' => 'Commits Mensuales', 'orden' => 13],
            ['numero' => '20+', 'texto' => 'Integraciones de Pago', 'orden' => 14],
            ['numero' => '10+', 'texto' => 'Certificaciones', 'orden' => 15],
        ];

        foreach ($estadisticas as $estadistica) {
            Estadistica::create($estadistica);
        }
    }
}
