<?php

namespace Database\Seeders;

use App\Models\Objekat;
use Illuminate\Database\Seeder;

class ObjektiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $objekti = [
            ['naziv' => 'Index Pizza Zlatibor', 'slug' => 'index-pizza-zlatibor', 'vrsta_objekta_id' => '1'],
            ['naziv' => 'Central Inn Gastro Bar', 'slug' => 'central-inn-gastro-bar', 'vrsta_objekta_id' => '1'],
            ['naziv' => 'Irish pub', 'slug' => 'irish-pub', 'vrsta_objekta_id' => '1'],
            ['naziv' => 'Restoran Gozba', 'slug' => 'restoran-gozba', 'vrsta_objekta_id' => '1'],
            ['naziv' => 'Pizza-pasta bar La Montagina', 'slug' => 'pizza-pasta-bar-la-montagina', 'vrsta_objekta_id' => '1'],
            ['naziv' => 'Grand Restoran', 'slug' => 'grand-restoran', 'vrsta_objekta_id' => '1'],
            ['naziv' => 'Gondola Gastro Bar', 'slug' => 'gondola-gastro-bar', 'vrsta_objekta_id' => '1'],
            ['naziv' => 'Restoran Jezero', 'slug' => 'restoran-jezero', 'vrsta_objekta_id' => '1'],
            ['naziv' => 'Restoran Bajka', 'slug' => 'restoran-bajka', 'vrsta_objekta_id' => '1'],
            ['naziv' => 'Dusko', 'slug' => 'dusko', 'vrsta_objekta_id' => '1'],
            ['naziv' => 'Donut Factory', 'slug' => 'donut-factory', 'vrsta_objekta_id' => '1']
        ];

        foreach ($objekti as $objekat) {
            Objekat::create($objekat);
        }
    }
}
