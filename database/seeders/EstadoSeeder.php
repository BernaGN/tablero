<?php

namespace Database\Seeders;

use App\Models\Estado;
use Illuminate\Database\Seeder;

class EstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Estado::create([
            'name' => 'Back Log',
            'configuracion_id' => 1,
            'textColor_id' => 9,
            'backgroundColor_id' => 8,
        ]);
        Estado::create([
            'name' => 'Pendiente',
            'configuracion_id' => 1,
            'textColor_id' => 9,
            'backgroundColor_id' => 2,
        ]);
        Estado::create([
            'name' => 'En proceso',
            'configuracion_id' => 1,
            'textColor_id' => 9,
            'backgroundColor_id' => 1,
        ]);
        Estado::create([
            'name' => 'Finalizada',
            'configuracion_id' => 1,
            'textColor_id' => 9,
            'backgroundColor_id' => 3,
        ]);
        Estado::create([
            'name' => 'Posibles',
            'configuracion_id' => 2,
            'textColor_id' => 9,
            'backgroundColor_id' => 8,
        ]);
        Estado::create([
            'name' => 'Pendientes',
            'configuracion_id' => 2,
            'textColor_id' => 9,
            'backgroundColor_id' => 2,
        ]);
        Estado::create([
            'name' => 'En proceso',
            'configuracion_id' => 2,
            'textColor_id' => 9,
            'backgroundColor_id' => 1,
        ]);
        Estado::create([
            'name' => 'Finalizada',
            'configuracion_id' => 2,
            'textColor_id' => 9,
            'backgroundColor_id' => 3,
        ]);
    }
}
