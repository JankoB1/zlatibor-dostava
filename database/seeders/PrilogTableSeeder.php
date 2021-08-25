<?php

namespace Database\Seeders;

use App\Models\Prilog;
use Illuminate\Database\Seeder;

class PrilogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prilozi = [
            ['naziv' => 'Zelena salata', 'slug' => 'zelena-salata'],
            ['naziv' => 'Majonez', 'slug' => 'majonez'],
            ['naziv' => 'Kečap', 'slug' => 'kecap'],
            ['naziv' => 'Senf', 'slug' => 'senf'],
            ['naziv' => 'Luk', 'slug' => 'luk'],
            ['naziv' => 'Ljuta tucana paprika', 'slug' => 'ljuta-tucana-paprika'],
            ['naziv' => 'Kupus', 'slug' => 'kupus'],
            ['naziv' => 'Paradajz', 'slug' => 'paradajz'],
            ['naziv' => 'Krastavac', 'slug' => 'krastavac'],
        ];

        foreach ($prilozi as $prilog) {
            Prilog::create($prilog);
        }
    }
}
