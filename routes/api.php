<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\AuthController;

// Crear una nueva API
Route::post('/apis', [ApiController::class, 'store']);
// Obtener la información de una API específica
Route::get('/apis/{api}', [ApiController::class, 'show']);
// Crear un nuevo método en una API específica
Route::post('/apis/{api}/methods', [ApiMethodController::class, 'store']);
// Obtener la información de un método específico de una API específica
Route::get('/apis/{api}/methods/{method}', [ApiMethodController::class, 'show']);
// Actualizar la información de una API específica
Route::put('/apis/{api}', [ApiController::class, 'update']);
// Actualizar la información de un método específico de una API específica
Route::put('/apis/{api}/methods/{method}', [ApiMethodController::class, 'update']);
// Eliminar una API específica
Route::delete('/apis/{api}', [ApiController::class, 'destroy']);
// Eliminar un método específico de una API específica
Route::delete('/apis/{api}/methods/{method}', [ApiMethodController::class, 'destroy']);

Route::post('/login', [AuthController::class, 'login']);