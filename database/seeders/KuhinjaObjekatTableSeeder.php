<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KuhinjaObjekatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kuhinjeObjekti = [
            ['kuhinja_id' => 2, 'objekat_id' => 1 ],
            ['kuhinja_id' => 9, 'objekat_id' => 1 ],
            ['kuhinja_id' => 13, 'objekat_id' => 1 ],
            ['kuhinja_id' => 3, 'objekat_id' => 2 ],
            ['kuhinja_id' => 4, 'objekat_id' => 2 ],
            ['kuhinja_id' => 2, 'objekat_id' => 2 ],
            ['kuhinja_id' => 3, 'objekat_id' => 3 ],
            ['kuhinja_id' => 2, 'objekat_id' => 3 ],
            ['kuhinja_id' => 1, 'objekat_id' => 3 ],
            ['kuhinja_id' => 11, 'objekat_id' => 4 ],
            ['kuhinja_id' => 12, 'objekat_id' => 4 ],
            ['kuhinja_id' => 15, 'objekat_id' => 4 ],
            ['kuhinja_id' => 1, 'objekat_id' => 5 ],
            ['kuhinja_id' => 2, 'objekat_id' => 5 ],
            ['kuhinja_id' => 13, 'objekat_id' => 5 ],
            ['kuhinja_id' => 14, 'objekat_id' => 6 ],
            ['kuhinja_id' => 15, 'objekat_id' => 6 ],
            ['kuhinja_id' => 16, 'objekat_id' => 6 ],
            ['kuhinja_id' => 2, 'objekat_id' => 7 ],
            ['kuhinja_id' => 5, 'objekat_id' => 7 ],
            ['kuhinja_id' => 1, 'objekat_id' => 7 ],
            ['kuhinja_id' => 1, 'objekat_id' => 8 ],
            ['kuhinja_id' => 2, 'objekat_id' => 8 ],
            ['kuhinja_id' => 3, 'objekat_id' => 8 ],
            ['kuhinja_id' => 1, 'objekat_id' => 9 ],
            ['kuhinja_id' => 2, 'objekat_id' => 9 ],
            ['kuhinja_id' => 3, 'objekat_id' => 9 ],
            ['kuhinja_id' => 6, 'objekat_id' => 9 ],
            ['kuhinja_id' => 7, 'objekat_id' => 10 ],
            ['kuhinja_id' => 8, 'objekat_id' => 10 ],
            ['kuhinja_id' => 10, 'objekat_id' => 11 ]
        ];

        DB::table('kuhinja_objekat')->insert($kuhinjeObjekti);
    }
}
