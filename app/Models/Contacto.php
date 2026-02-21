<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Contacto extends Model
{
    protected $fillable = [
        'nombre',
        'email',
        'telefono',
        'mensaje',
        'estado_id',
        'user_id',
    ];

    public function estado(): BelongsTo
    {
        return $this->belongsTo(EstadoContacto::class, 'estado_id');
    }

    public function asignadoA(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
