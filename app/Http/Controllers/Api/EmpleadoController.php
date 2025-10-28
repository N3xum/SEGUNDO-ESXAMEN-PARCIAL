<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    // GET: Listar todos los empleados
    public function index()
    {
        $empleados = Empleado::all();
        return response()->json($empleados);
    }

    // POST: Crear nuevo empleado
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'correo' => 'required|email|unique:empleados,correo',
            'salario' => 'required|numeric|min:0'
        ]);

        $empleado = Empleado::create($request->all());
        return response()->json($empleado, 201);
    }

    // Los demás métodos (show, update, destroy) puedes dejarlos vacíos si no los piden
    public function show($id) {}
    public function update(Request $request, $id) {}
    public function destroy($id) {}
}
