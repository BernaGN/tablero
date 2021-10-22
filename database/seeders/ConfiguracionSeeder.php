<?php

namespace Database\Seeders;

use App\Models\Configuracion;
use Illuminate\Database\Seeder;

class ConfiguracionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Configuracion::create([
            'nombre' => 'Mustango'
        ]);
        Configuracion::create([
            'nombre' => 'Ofismedia'
        ]);
        Configuracion::create([
            'nombre' => 'RedMayoreo'
        ]);
        Configuracion::create([
            'nombre' => 'Personal'
        ]);
    }
}
