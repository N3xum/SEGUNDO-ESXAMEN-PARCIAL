<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmpleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Empleado::create([
        'nombre' => 'Juan',
        'apellido' => 'Pérez',
        'correo' => 'juan.perez@empresa.com',
        'salario' => 3500.00
    ]);

    \App\Models\Empleado::create([
        'nombre' => 'María',
        'apellido' => 'González',
        'correo' => 'maria.gonzalez@empresa.com',
        'salario' => 4200.50
    ]);

    \App\Models\Empleado::create([
        'nombre' => 'Carlos',
        'apellido' => 'Rodríguez',
        'correo' => 'carlos.rodriguez@empresa.com',
        'salario' => 3800.75
    ]);
    }
}
