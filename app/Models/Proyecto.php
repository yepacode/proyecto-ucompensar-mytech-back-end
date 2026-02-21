<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Proyecto extends Model
{
    protected $fillable = [
        'titulo',
        'descripcion',
        'categoria',
        'categoria_id',
        'tecnologias',
        'color_fondo',
        'icono',
        'imagen',
        'orden',
        'activo',
    ];

    protected function casts(): array
    {
        return [
            'tecnologias' => 'array',
            'activo' => 'boolean',
        ];
    }

    public function categoriaRelacion(): BelongsTo
    {
        return $this->belongsTo(Categoria::class, 'categoria_id');
    }

    public function tecnologiasRelacion(): BelongsToMany
    {
        return $this->belongsToMany(Tecnologia::class, 'proyecto_tecnologia')
                     ->withTimestamps();
    }
}
