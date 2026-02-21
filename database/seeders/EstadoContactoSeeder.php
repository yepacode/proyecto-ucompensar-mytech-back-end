<?php

namespace Database\Seeders;

use App\Models\EstadoContacto;
use Illuminate\Database\Seeder;

class EstadoContactoSeeder extends Seeder
{
    public function run(): void
    {
        $estados = [
            ['nombre' => 'Nuevo', 'color' => '#3b82f6', 'orden' => 1],
            ['nombre' => 'En proceso', 'color' => '#f59e0b', 'orden' => 2],
            ['nombre' => 'Respondido', 'color' => '#10b981', 'orden' => 3],
            ['nombre' => 'Cerrado', 'color' => '#6b7280', 'orden' => 4],
        ];

        foreach ($estados as $estado) {
            EstadoContacto::create($estado);
        }
    }
}
