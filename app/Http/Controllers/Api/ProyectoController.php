<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Proyecto;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    public function index(): JsonResponse
    {
        $proyectos = Proyecto::where('activo', true)->orderBy('orden')->get();

        return response()->json([
            'success' => true,
            'message' => 'Proyectos obtenidos exitosamente',
            'data' => $proyectos,
        ]);
    }

    public function store(Request $request): JsonResponse
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'categoria' => 'required|string|max:100',
            'tecnologias' => 'required|array',
            'tecnologias.*' => 'string',
            'color_fondo' => 'nullable|string|max:255',
            'icono' => 'nullable|string',
            'imagen' => 'required|string|max:500',
            'orden' => 'nullable|integer',
            'activo' => 'nullable|boolean',
        ]);

        $proyecto = Proyecto::create($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Proyecto creado exitosamente',
            'data' => $proyecto,
        ], 201);
    }

    public function show(Proyecto $proyecto): JsonResponse
    {
        return response()->json([
            'success' => true,
            'message' => 'Proyecto obtenido exitosamente',
            'data' => $proyecto,
        ]);
    }

    public function update(Request $request, Proyecto $proyecto): JsonResponse
    {
        $request->validate([
            'titulo' => 'sometimes|required|string|max:255',
            'descripcion' => 'sometimes|required|string',
            'categoria' => 'sometimes|required|string|max:100',
            'tecnologias' => 'sometimes|required|array',
            'tecnologias.*' => 'string',
            'color_fondo' => 'nullable|string|max:255',
            'icono' => 'nullable|string',
            'imagen' => 'sometimes|required|string|max:500',
            'orden' => 'nullable|integer',
            'activo' => 'nullable|boolean',
        ]);

        $proyecto->update($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Proyecto actualizado exitosamente',
            'data' => $proyecto,
        ]);
    }

    public function destroy(Proyecto $proyecto): JsonResponse
    {
        $proyecto->delete();

        return response()->json([
            'success' => true,
            'message' => 'Proyecto eliminado exitosamente',
        ]);
    }
}
