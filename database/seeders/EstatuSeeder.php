<?php

namespace Database\Seeders;

use App\Models\Estatu;
use Illuminate\Database\Seeder;

class EstatuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Estatu::create([
            'name' => 'Back Log',
            'tipo_id' => 1,
            'textColor_id' => 9,
            'backgroundColor_id' => 8,
        ]);
        Estatu::create([
            'name' => 'Pendiente',
            'tipo_id' => 1,
            'textColor_id' => 9,
            'backgroundColor_id' => 2,
        ]);
        Estatu::create([
            'name' => 'En proceso',
            'tipo_id' => 1,
            'textColor_id' => 9,
            'backgroundColor_id' => 1,
        ]);
        Estatu::create([
            'name' => 'Finalizada',
            'tipo_id' => 1,
            'textColor_id' => 9,
            'backgroundColor_id' => 3,
        ]);
    }
}
