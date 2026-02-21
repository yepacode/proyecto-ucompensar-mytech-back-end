<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Tecnologia;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class TecnologiaController extends Controller
{
    public function index(): JsonResponse
    {
        $tecnologias = Tecnologia::where('activo', true)->orderBy('orden')->get();

        return response()->json([
            'success' => true,
            'message' => 'Tecnologías obtenidas exitosamente',
            'data' => $tecnologias,
        ]);
    }

    public function store(Request $request): JsonResponse
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
            'logo' => 'required|string|max:500',
            'orden' => 'nullable|integer',
            'activo' => 'nullable|boolean',
        ]);

        $tecnologia = Tecnologia::create($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Tecnología creada exitosamente',
            'data' => $tecnologia,
        ], 201);
    }

    public function show(Tecnologia $tecnologia): JsonResponse
    {
        return response()->json([
            'success' => true,
            'message' => 'Tecnología obtenida exitosamente',
            'data' => $tecnologia,
        ]);
    }

    public function update(Request $request, Tecnologia $tecnologia): JsonResponse
    {
        $request->validate([
            'nombre' => 'sometimes|required|string|max:100',
            'logo' => 'sometimes|required|string|max:500',
            'orden' => 'nullable|integer',
            'activo' => 'nullable|boolean',
        ]);

        $tecnologia->update($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Tecnología actualizada exitosamente',
            'data' => $tecnologia,
        ]);
    }

    public function destroy(Tecnologia $tecnologia): JsonResponse
    {
        $tecnologia->delete();

        return response()->json([
            'success' => true,
            'message' => 'Tecnología eliminada exitosamente',
        ]);
    }
}
