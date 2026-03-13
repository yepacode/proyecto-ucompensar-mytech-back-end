<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Proyecto;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        $query = Proyecto::orderBy('orden');
        if (!$request->has('all')) {
            $query->where('activo', true);
        }
        $proyectos = $query->get();

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
            'categoria' => 'nullable|string|max:100',
            'categoria_id' => 'nullable|integer|exists:categorias,id',
            'tecnologias' => 'nullable|array',
            'tecnologias.*' => 'string',
            'color_fondo' => 'nullable|string|max:255',
            'icono' => 'nullable|string',
            'imagen' => 'nullable|string|max:500',
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
            'categoria' => 'nullable|string|max:100',
            'categoria_id' => 'nullable|integer|exists:categorias,id',
            'tecnologias' => 'nullable|array',
            'tecnologias.*' => 'string',
            'color_fondo' => 'nullable|string|max:255',
            'icono' => 'nullable|string',
            'imagen' => 'nullable|string|max:500',
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
