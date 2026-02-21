<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index(): JsonResponse
    {
        $categorias = Categoria::where('activo', true)
            ->orderBy('orden')
            ->withCount('proyectos')
            ->get();

        return response()->json([
            'success' => true,
            'message' => 'Categorias obtenidas exitosamente',
            'data' => $categorias,
        ]);
    }

    public function store(Request $request): JsonResponse
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
            'descripcion' => 'nullable|string|max:255',
            'orden' => 'nullable|integer',
            'activo' => 'nullable|boolean',
        ]);

        $categoria = Categoria::create($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Categoria creada exitosamente',
            'data' => $categoria,
        ], 201);
    }

    public function show(Categoria $categoria): JsonResponse
    {
        $categoria->loadCount('proyectos');

        return response()->json([
            'success' => true,
            'message' => 'Categoria obtenida exitosamente',
            'data' => $categoria,
        ]);
    }

    public function update(Request $request, Categoria $categoria): JsonResponse
    {
        $request->validate([
            'nombre' => 'sometimes|required|string|max:100',
            'descripcion' => 'nullable|string|max:255',
            'orden' => 'nullable|integer',
            'activo' => 'nullable|boolean',
        ]);

        $categoria->update($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Categoria actualizada exitosamente',
            'data' => $categoria,
        ]);
    }

    public function destroy(Categoria $categoria): JsonResponse
    {
        $categoria->delete();

        return response()->json([
            'success' => true,
            'message' => 'Categoria eliminada exitosamente',
        ]);
    }
}
