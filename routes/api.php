<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\EmpleadoController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::apiResource('empleados', EmpleadoController::class);
//hola ya esta hasta aqui el backend