<?php

namespace Database\Seeders;

use App\Models\Color;
use Illuminate\Database\Seeder;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Color::create([
            'nombre' => 'primary',
        ]);
        Color::create([
            'nombre' => 'secondary',
        ]);
        Color::create([
            'nombre' => 'success',
        ]);
        Color::create([
            'nombre' => 'danger',
        ]);
        Color::create([
            'nombre' => 'warning',
        ]);
        Color::create([
            'nombre' => 'info',
        ]);
        Color::create([
            'nombre' => 'light',
        ]);
        Color::create([
            'nombre' => 'dark',
        ]);
        Color::create([
            'nombre' => 'white',
        ]);
    }
}
