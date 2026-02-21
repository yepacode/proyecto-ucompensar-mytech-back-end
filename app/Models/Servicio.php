<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    protected $fillable = [
        'titulo',
        'descripcion',
        'caracteristicas',
        'icono',
        'color_fondo',
        'orden',
        'activo',
    ];

    protected function casts(): array
    {
        return [
            'caracteristicas' => 'array',
            'activo' => 'boolean',
        ];
    }
}
