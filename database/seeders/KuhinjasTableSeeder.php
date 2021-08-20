<?php

namespace Database\Seeders;

use App\Models\Kuhinja;
use Illuminate\Database\Seeder;

class KuhinjasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kuhinje = [
            ['naziv' => 'Pasta', 'slug' => 'pasta'],
            ['naziv' => 'Pizza', 'slug' => 'pizza'],
            ['naziv' => 'Roštilj', 'slug' => 'roštilj'],
            ['naziv' => 'Burger', 'slug' => 'burgeri'],
            ['naziv' => 'Američka hrana', 'slug' => 'americka-hrana'],
            ['naziv' => 'Ribe i plodovi mora', 'slug' => 'ribe-i-plodovi-mora'],
            ['naziv' => 'Makrobiotička hrana', 'slug' => 'makrobioticka-hrana'],
            ['naziv' => 'Napici', 'slug' => 'napici'],
            ['naziv' => 'Palačinke', 'slug' => 'palacinke'],
            ['naziv' => 'Poslastice', 'slug' => 'poslastice'],
            ['naziv' => 'Doručak', 'slug' => 'dorucak'],
            ['naziv' => 'Piletina', 'slug' => 'piletina'],
            ['naziv' => 'Sendviči', 'slug' => 'sendvici'],
            ['naziv' => 'Internacionalna hrana', 'slug' => 'internacionalna-hrana'],
            ['naziv' => 'Srpska hrana', 'slug' => 'srpska_hrana'],
            ['naziv' => 'Mediteranska hrana', 'slug' => 'mediteranska-hrana']
        ];

        foreach ($kuhinje as $kuhinja) {
            Kuhinja::create($kuhinja);
        }
    }
}
