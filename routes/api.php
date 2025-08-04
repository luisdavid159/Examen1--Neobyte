<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\AuthController;

// Ruta de prueba simple
Route::get('/test', function () {
    return response()->json(['mensaje' => 'API funcionando correctamente']);
});

// Rutas API para marcas y productos
Route::apiResource('marcas', MarcaController::class);
Route::apiResource('productos', ProductoController::class);

Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);