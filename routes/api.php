<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CategoriaController;
use App\Http\Controllers\Api\ContactoController;
use App\Http\Controllers\Api\EstadisticaController;
use App\Http\Controllers\Api\EstadoContactoController;
use App\Http\Controllers\Api\ProyectoController;
use App\Http\Controllers\Api\ServicioController;
use App\Http\Controllers\Api\TecnologiaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// ─── Auth Routes ────────────────────────────────────────────
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// ─── Public Routes (read-only) ──────────────────────────────
Route::post('/contactos', [ContactoController::class, 'store']);

Route::get('/servicios', [ServicioController::class, 'index']);
Route::get('/servicios/{servicio}', [ServicioController::class, 'show']);

Route::get('/proyectos', [ProyectoController::class, 'index']);
Route::get('/proyectos/{proyecto}', [ProyectoController::class, 'show']);

Route::get('/tecnologias', [TecnologiaController::class, 'index']);

Route::get('/estadisticas', [EstadisticaController::class, 'index']);

Route::get('/categorias', [CategoriaController::class, 'index']);
Route::get('/categorias/{categoria}', [CategoriaController::class, 'show']);

// ─── Protected Routes (auth required) ───────────────────────
Route::middleware('auth:sanctum')->group(function () {
    // Auth
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/user', fn(Request $request) => $request->user());

    // Contactos (full CRUD + asignar estado y responsable)
    Route::get('/contactos', [ContactoController::class, 'index']);
    Route::get('/contactos/{contacto}', [ContactoController::class, 'show']);
    Route::put('/contactos/{contacto}', [ContactoController::class, 'update']);
    Route::delete('/contactos/{contacto}', [ContactoController::class, 'destroy']);

    // Servicios (create, update, delete)
    Route::post('/servicios', [ServicioController::class, 'store']);
    Route::put('/servicios/{servicio}', [ServicioController::class, 'update']);
    Route::delete('/servicios/{servicio}', [ServicioController::class, 'destroy']);

    // Proyectos (create, update, delete)
    Route::post('/proyectos', [ProyectoController::class, 'store']);
    Route::put('/proyectos/{proyecto}', [ProyectoController::class, 'update']);
    Route::delete('/proyectos/{proyecto}', [ProyectoController::class, 'destroy']);

    // Tecnologias (full CRUD)
    Route::get('/tecnologias/{tecnologia}', [TecnologiaController::class, 'show']);
    Route::post('/tecnologias', [TecnologiaController::class, 'store']);
    Route::put('/tecnologias/{tecnologia}', [TecnologiaController::class, 'update']);
    Route::delete('/tecnologias/{tecnologia}', [TecnologiaController::class, 'destroy']);

    // Estadisticas (full CRUD)
    Route::get('/estadisticas/{estadistica}', [EstadisticaController::class, 'show']);
    Route::post('/estadisticas', [EstadisticaController::class, 'store']);
    Route::put('/estadisticas/{estadistica}', [EstadisticaController::class, 'update']);
    Route::delete('/estadisticas/{estadistica}', [EstadisticaController::class, 'destroy']);

    // Categorias (create, update, delete)
    Route::post('/categorias', [CategoriaController::class, 'store']);
    Route::put('/categorias/{categoria}', [CategoriaController::class, 'update']);
    Route::delete('/categorias/{categoria}', [CategoriaController::class, 'destroy']);

    // Estados de contacto (full CRUD)
    Route::get('/estados-contacto', [EstadoContactoController::class, 'index']);
    Route::post('/estados-contacto', [EstadoContactoController::class, 'store']);
    Route::put('/estados-contacto/{estadoContacto}', [EstadoContactoController::class, 'update']);
    Route::delete('/estados-contacto/{estadoContacto}', [EstadoContactoController::class, 'destroy']);
});
