<?php

namespace Database\Seeders;

use App\Models\VrstaObjekta;
use Illuminate\Database\Seeder;

class VrsteObjektaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vrsteObjekta = [
            ['naziv' => 'Restoran', 'slug' => 'restoran'],
            ['naziv' => 'Prodavnica', 'slug' => 'prodavnica'],
            ['naziv' => 'Apoteka', 'slug' => 'apoteka']
        ];

        foreach ($vrsteObjekta as $vrstaObjekta) {
            VrstaObjekta::create($vrstaObjekta);
        }
    }
}
