<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Contacto;
use App\Models\EstadoContacto;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function index(): JsonResponse
    {
        $contactos = Contacto::with(['estado', 'asignadoA:id,name,email'])
            ->orderBy('created_at', 'desc')
            ->get();

        return response()->json([
            'success' => true,
            'message' => 'Contactos obtenidos exitosamente',
            'data' => $contactos,
        ]);
    }

    public function store(Request $request): JsonResponse
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telefono' => 'nullable|string|max:20',
            'mensaje' => 'required|string',
        ]);

        $estadoNuevo = EstadoContacto::where('nombre', 'Nuevo')->first();

        $contacto = Contacto::create([
            ...$request->only(['nombre', 'email', 'telefono', 'mensaje']),
            'estado_id' => $estadoNuevo?->id,
        ]);

        return response()->json([
            'success' => true,
            'message' => '¡Mensaje enviado con éxito! Nos pondremos en contacto pronto.',
            'data' => $contacto->load('estado'),
        ], 201);
    }

    public function show(Contacto $contacto): JsonResponse
    {
        $contacto->load(['estado', 'asignadoA:id,name,email']);

        return response()->json([
            'success' => true,
            'message' => 'Contacto obtenido exitosamente',
            'data' => $contacto,
        ]);
    }

    public function update(Request $request, Contacto $contacto): JsonResponse
    {
        $request->validate([
            'nombre' => 'sometimes|required|string|max:255',
            'email' => 'sometimes|required|email|max:255',
            'telefono' => 'nullable|string|max:20',
            'mensaje' => 'sometimes|required|string',
            'estado_id' => 'nullable|exists:estados_contacto,id',
            'user_id' => 'nullable|exists:users,id',
        ]);

        $contacto->update($request->only(['nombre', 'email', 'telefono', 'mensaje', 'estado_id', 'user_id']));

        return response()->json([
            'success' => true,
            'message' => 'Contacto actualizado exitosamente',
            'data' => $contacto->load(['estado', 'asignadoA:id,name,email']),
        ]);
    }

    public function destroy(Contacto $contacto): JsonResponse
    {
        $contacto->delete();

        return response()->json([
            'success' => true,
            'message' => 'Contacto eliminado exitosamente',
        ]);
    }
}
