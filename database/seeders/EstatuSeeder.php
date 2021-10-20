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
            'textColor' => 'text-white',
            'backgroundColor' => 'bg-dark',
        ]);
        Estatu::create([
            'name' => 'Pendiente',
            'textColor' => 'text-white',
            'backgroundColor' => 'bg-secondary',
        ]);
        Estatu::create([
            'name' => 'En proceso',
            'textColor' => 'text-dark',
            'backgroundColor' => 'bg-primary',
        ]);
        Estatu::create([
            'name' => 'Finalizada',
            'textColor' => 'text-dark',
            'backgroundColor' => 'bg-success',
        ]);
    }
}
