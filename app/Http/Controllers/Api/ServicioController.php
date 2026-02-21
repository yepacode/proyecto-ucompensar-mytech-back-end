<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Servicio;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ServicioController extends Controller
{
    public function index(): JsonResponse
    {
        $servicios = Servicio::where('activo', true)->orderBy('orden')->get();

        return response()->json([
            'success' => true,
            'message' => 'Servicios obtenidos exitosamente',
            'data' => $servicios,
        ]);
    }

    public function store(Request $request): JsonResponse
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'caracteristicas' => 'required|array',
            'caracteristicas.*' => 'string',
            'icono' => 'nullable|string',
            'color_fondo' => 'nullable|string|max:255',
            'orden' => 'nullable|integer',
            'activo' => 'nullable|boolean',
        ]);

        $servicio = Servicio::create($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Servicio creado exitosamente',
            'data' => $servicio,
        ], 201);
    }

    public function show(Servicio $servicio): JsonResponse
    {
        return response()->json([
            'success' => true,
            'message' => 'Servicio obtenido exitosamente',
            'data' => $servicio,
        ]);
    }

    public function update(Request $request, Servicio $servicio): JsonResponse
    {
        $request->validate([
            'titulo' => 'sometimes|required|string|max:255',
            'descripcion' => 'sometimes|required|string',
            'caracteristicas' => 'sometimes|required|array',
            'caracteristicas.*' => 'string',
            'icono' => 'nullable|string',
            'color_fondo' => 'nullable|string|max:255',
            'orden' => 'nullable|integer',
            'activo' => 'nullable|boolean',
        ]);

        $servicio->update($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Servicio actualizado exitosamente',
            'data' => $servicio,
        ]);
    }

    public function destroy(Servicio $servicio): JsonResponse
    {
        $servicio->delete();

        return response()->json([
            'success' => true,
            'message' => 'Servicio eliminado exitosamente',
        ]);
    }
}
