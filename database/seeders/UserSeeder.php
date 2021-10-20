<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Berna',
            'email' => 'bernardo.martinez@mustango.com.mx',
            'password' => bcrypt('Ner52do10ca'),
        ]);
    }
}
