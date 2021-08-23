<?php

namespace Database\Seeders;

use App\Models\Varijacija;
use Illuminate\Database\Seeder;

class VarijacijaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $varijacije = [
            ['naziv' => 'Default', 'slug' => 'default', 'vrsta_varijacije_id' => '1'],
            ['naziv' => '22cm', 'slug' => '22cm', 'vrsta_varijacije_id' => '2'],
            ['naziv' => '33cm', 'slug' => '33cm', 'vrsta_varijacije_id' => '2'],
            ['naziv' => '50cm', 'slug' => '50cm', 'vrsta_varijacije_id' => '2'],
            ['naziv' => 'Sa feferonima', 'slug' => 'sa-feferonima', 'vrsta_varijacije_id' => '3'],
            ['naziv' => 'Bez feferona', 'slug' => 'bez-feferona', 'vrsta_varijacije_id' => '3'],
            ['naziv' => 'Svinjetina', 'slug' => 'svinjetina', 'vrsta_varijacije_id' => '4'],
            ['naziv' => 'Piletina', 'slug' => 'piletina', 'vrsta_varijacije_id' => '4'],
            ['naziv' => 'Mali', 'slug' => 'mali', 'vrsta_varijacije_id' => '2'],
            ['naziv' => 'Veliki', 'slug' => 'veliki', 'vrsta_varijacije_id' => '2'],
            ['naziv' => 'Neljuti', 'slug' => 'neljuti', 'vrsta_varijacije_id' => '5'],
            ['naziv' => 'Ljuti', 'slug' => 'ljuti', 'vrsta_varijacije_id' => '5'],
            ['naziv' => 'Šipurak', 'slug' => 'sipurak', 'vrsta_varijacije_id' => '6'],
            ['naziv' => 'Kajsija', 'slug' => 'kajsija', 'vrsta_varijacije_id' => '6'],
        ];

        foreach ($varijacije as $varijacija) {
            Varijacija::create($varijacija);
        }
    }
}
