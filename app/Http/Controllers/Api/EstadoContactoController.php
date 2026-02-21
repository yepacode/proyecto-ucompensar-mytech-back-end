<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\EstadoContacto;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class EstadoContactoController extends Controller
{
    public function index(): JsonResponse
    {
        $estados = EstadoContacto::orderBy('orden')
            ->withCount('contactos')
            ->get();

        return response()->json([
            'success' => true,
            'message' => 'Estados de contacto obtenidos exitosamente',
            'data' => $estados,
        ]);
    }

    public function store(Request $request): JsonResponse
    {
        $request->validate([
            'nombre' => 'required|string|max:50',
            'color' => 'nullable|string|max:20',
            'orden' => 'nullable|integer',
        ]);

        $estado = EstadoContacto::create($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Estado de contacto creado exitosamente',
            'data' => $estado,
        ], 201);
    }

    public function update(Request $request, EstadoContacto $estadoContacto): JsonResponse
    {
        $request->validate([
            'nombre' => 'sometimes|required|string|max:50',
            'color' => 'nullable|string|max:20',
            'orden' => 'nullable|integer',
        ]);

        $estadoContacto->update($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Estado de contacto actualizado exitosamente',
            'data' => $estadoContacto,
        ]);
    }

    public function destroy(EstadoContacto $estadoContacto): JsonResponse
    {
        $estadoContacto->delete();

        return response()->json([
            'success' => true,
            'message' => 'Estado de contacto eliminado exitosamente',
        ]);
    }
}
