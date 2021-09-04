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
            ['naziv' => 'Izbor testenine', 'slug' => 'izbor-testenine'],
            ['naziv' => 'Izbor sira', 'slug' => 'izbor-sira'],
            ['naziv' => 'Izbor priloga', 'slug' => 'izbor-priloga'],
            ['naziv' => 'Mera pečenja', 'slug' => 'mera-pecenja'],
            ['naziv' => 'Luk', 'slug' => 'luk'],
            ['naziv' => 'Izbor jaja', 'slug' => 'izbor-jaja'],
            ['naziv' => 'Izbor kobasice', 'slug' => 'izbor-kobasice'],
            ['naziv' => 'Izbor krema', 'slug' => 'izbor-krema'],
            ['naziv' => 'Izbor salate', 'slug' => 'ljutina'],
        ];

        foreach ($vrsteVarijacija as $vrstaVarijacije) {
            VrstaVarijacije::create($vrstaVarijacije);
        }
    }
}
