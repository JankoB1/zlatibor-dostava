<?php

namespace Database\Seeders;

use App\Models\VrstaVarijacije;
use Illuminate\Database\Seeder;

class VrstaVarijacijaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vrsteVarijacija = [
            ['naziv' => 'Default', 'slug' => 'default'],
            ['naziv' => 'Veličina', 'slug' => 'velicina'],
            ['naziv' => 'Feferoni', 'slug' => 'feferoni'],
            ['naziv' => 'Vrsta mesa', 'slug' => 'vrsta-mesa'],
            ['naziv' => 'Ljutina', 'slug' => 'ljutina'],
            ['naziv' => 'Izbor džema', 'slug' => 'izbor-dzema'],
        ];

        foreach ($vrsteVarijacija as $vrstaVarijacije) {
            VrstaVarijacije::create($vrstaVarijacije);
        }
    }
}
