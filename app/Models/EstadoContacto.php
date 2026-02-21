<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class EstadoContacto extends Model
{
    protected $table = 'estados_contacto';

    protected $fillable = [
        'nombre',
        'color',
        'orden',
    ];

    public function contactos(): HasMany
    {
        return $this->hasMany(Contacto::class, 'estado_id');
    }
}
