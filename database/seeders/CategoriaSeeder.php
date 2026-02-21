<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    public function run(): void
    {
        $categorias = [
            ['nombre' => 'E-commerce', 'descripcion' => 'Tiendas online y plataformas de comercio electronico', 'orden' => 1],
            ['nombre' => 'Sistema Web', 'descripcion' => 'Sistemas de gestion y administracion web', 'orden' => 2],
            ['nombre' => 'Aplicacion Web', 'descripcion' => 'Aplicaciones web interactivas y dashboards', 'orden' => 3],
            ['nombre' => 'Landing Page', 'descripcion' => 'Paginas de aterrizaje y sitios corporativos', 'orden' => 4],
            ['nombre' => 'API REST', 'descripcion' => 'Servicios backend y APIs para integraciones', 'orden' => 5],
            ['nombre' => 'App Movil', 'descripcion' => 'Aplicaciones moviles hibridas y nativas', 'orden' => 6],
        ];

        foreach ($categorias as $categoria) {
            Categoria::create($categoria);
        }
    }
}
