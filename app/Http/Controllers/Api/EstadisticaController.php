<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Estadistica;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class EstadisticaController extends Controller
{
    public function index(): JsonResponse
    {
        $estadisticas = Estadistica::where('activo', true)->orderBy('orden')->get();

        return response()->json([
            'success' => true,
            'message' => 'Estadísticas obtenidas exitosamente',
            'data' => $estadisticas,
        ]);
    }

    public function store(Request $request): JsonResponse
    {
        $request->validate([
            'numero' => 'required|string|max:20',
            'texto' => 'required|string|max:100',
            'orden' => 'nullable|integer',
            'activo' => 'nullable|boolean',
        ]);

        $estadistica = Estadistica::create($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Estadística creada exitosamente',
            'data' => $estadistica,
        ], 201);
    }

    public function show(Estadistica $estadistica): JsonResponse
    {
        return response()->json([
            'success' => true,
            'message' => 'Estadística obtenida exitosamente',
            'data' => $estadistica,
        ]);
    }

    public function update(Request $request, Estadistica $estadistica): JsonResponse
    {
        $request->validate([
            'numero' => 'sometimes|required|string|max:20',
            'texto' => 'sometimes|required|string|max:100',
            'orden' => 'nullable|integer',
            'activo' => 'nullable|boolean',
        ]);

        $estadistica->update($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Estadística actualizada exitosamente',
            'data' => $estadistica,
        ]);
    }

    public function destroy(Estadistica $estadistica): JsonResponse
    {
        $estadistica->delete();

        return response()->json([
            'success' => true,
            'message' => 'Estadística eliminada exitosamente',
        ]);
    }
}
