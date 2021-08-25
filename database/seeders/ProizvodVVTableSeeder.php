<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProizvodVVTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $proizvodVvs = [
            [ 'proizvod_id' => 1, 'vrsta_varijacije_id' =>2 ],
            [ 'proizvod_id' => 2, 'vrsta_varijacije_id' =>2 ],
            [ 'proizvod_id' => 3, 'vrsta_varijacije_id' =>2 ],
            [ 'proizvod_id' => 4, 'vrsta_varijacije_id' =>2 ],
            [ 'proizvod_id' => 4, 'vrsta_varijacije_id' =>3 ],
            [ 'proizvod_id' => 5, 'vrsta_varijacije_id' =>2 ],
            [ 'proizvod_id' => 6, 'vrsta_varijacije_id' =>2 ],
            [ 'proizvod_id' => 6, 'vrsta_varijacije_id' =>3 ],
            [ 'proizvod_id' => 7, 'vrsta_varijacije_id' =>2 ],
            [ 'proizvod_id' => 7, 'vrsta_varijacije_id' =>3 ],
            [ 'proizvod_id' => 8, 'vrsta_varijacije_id' =>2 ],
            [ 'proizvod_id' => 8, 'vrsta_varijacije_id' =>3 ],
            [ 'proizvod_id' => 9, 'vrsta_varijacije_id' =>2 ],
            [ 'proizvod_id' => 9, 'vrsta_varijacije_id' =>3 ],
            [ 'proizvod_id' => 10, 'vrsta_varijacije_id' =>2 ],
            [ 'proizvod_id' => 10, 'vrsta_varijacije_id' =>3 ],
            [ 'proizvod_id' => 11, 'vrsta_varijacije_id' =>2 ],
            [ 'proizvod_id' => 11, 'vrsta_varijacije_id' =>3 ],
            [ 'proizvod_id' => 12, 'vrsta_varijacije_id' =>2 ],
            [ 'proizvod_id' => 13, 'vrsta_varijacije_id' =>2 ],
            [ 'proizvod_id' => 14, 'vrsta_varijacije_id' =>2 ],
            [ 'proizvod_id' => 14, 'vrsta_varijacije_id' =>3 ],
            [ 'proizvod_id' => 15, 'vrsta_varijacije_id' =>2 ],
            [ 'proizvod_id' => 16, 'vrsta_varijacije_id' =>2 ],
            [ 'proizvod_id' => 17, 'vrsta_varijacije_id' =>2 ],
            [ 'proizvod_id' => 18, 'vrsta_varijacije_id' =>1 ],
            [ 'proizvod_id' => 19, 'vrsta_varijacije_id' =>2 ],
            [ 'proizvod_id' => 19, 'vrsta_varijacije_id' =>3 ],
            [ 'proizvod_id' => 20, 'vrsta_varijacije_id' =>2 ],
            [ 'proizvod_id' => 20, 'vrsta_varijacije_id' =>3 ],
            [ 'proizvod_id' => 21, 'vrsta_varijacije_id' =>4 ],
            [ 'proizvod_id' => 22, 'vrsta_varijacije_id' =>1 ],
            [ 'proizvod_id' => 23, 'vrsta_varijacije_id' =>1 ],
            [ 'proizvod_id' => 24, 'vrsta_varijacije_id' =>1 ],
            [ 'proizvod_id' => 25, 'vrsta_varijacije_id' =>1 ],
            [ 'proizvod_id' => 26, 'vrsta_varijacije_id' =>1 ],
            [ 'proizvod_id' => 27, 'vrsta_varijacije_id' =>1 ],
            [ 'proizvod_id' => 28, 'vrsta_varijacije_id' =>2 ],
            [ 'proizvod_id' => 29, 'vrsta_varijacije_id' =>2 ],
            [ 'proizvod_id' => 30, 'vrsta_varijacije_id' =>2 ],
            [ 'proizvod_id' => 31, 'vrsta_varijacije_id' =>2 ],
            [ 'proizvod_id' => 32, 'vrsta_varijacije_id' =>2 ],
            [ 'proizvod_id' => 33, 'vrsta_varijacije_id' =>2 ],
            [ 'proizvod_id' => 34, 'vrsta_varijacije_id' =>2 ],
            [ 'proizvod_id' => 35, 'vrsta_varijacije_id' =>2 ],
            [ 'proizvod_id' => 36, 'vrsta_varijacije_id' =>2 ],
            [ 'proizvod_id' => 37, 'vrsta_varijacije_id' =>1 ],
            [ 'proizvod_id' => 38, 'vrsta_varijacije_id' =>1 ],
            [ 'proizvod_id' => 39, 'vrsta_varijacije_id' =>2 ],
            [ 'proizvod_id' => 40, 'vrsta_varijacije_id' =>1 ],
            [ 'proizvod_id' => 41, 'vrsta_varijacije_id' =>1 ],
            [ 'proizvod_id' => 42, 'vrsta_varijacije_id' =>5 ],
            [ 'proizvod_id' => 43, 'vrsta_varijacije_id' =>1 ],
            [ 'proizvod_id' => 44, 'vrsta_varijacije_id' =>1 ],
            [ 'proizvod_id' => 45, 'vrsta_varijacije_id' =>1 ],
            [ 'proizvod_id' => 46, 'vrsta_varijacije_id' =>1 ],
            [ 'proizvod_id' => 47, 'vrsta_varijacije_id' =>1 ],
            [ 'proizvod_id' => 48, 'vrsta_varijacije_id' =>1 ],
            [ 'proizvod_id' => 49, 'vrsta_varijacije_id' =>1 ],
            [ 'proizvod_id' => 50, 'vrsta_varijacije_id' =>1 ],
            [ 'proizvod_id' => 51, 'vrsta_varijacije_id' =>1 ],
            [ 'proizvod_id' => 52, 'vrsta_varijacije_id' =>1 ],
            [ 'proizvod_id' => 53, 'vrsta_varijacije_id' =>1 ],
            [ 'proizvod_id' => 54, 'vrsta_varijacije_id' =>1 ],
            [ 'proizvod_id' => 55, 'vrsta_varijacije_id' =>1 ],
            [ 'proizvod_id' => 56, 'vrsta_varijacije_id' =>1 ],
            [ 'proizvod_id' => 57, 'vrsta_varijacije_id' =>1 ],
            [ 'proizvod_id' => 58, 'vrsta_varijacije_id' =>1 ],
            [ 'proizvod_id' => 59, 'vrsta_varijacije_id' =>1 ],
            [ 'proizvod_id' => 60, 'vrsta_varijacije_id' =>1 ],
            [ 'proizvod_id' => 61, 'vrsta_varijacije_id' =>6 ],
            [ 'proizvod_id' => 62, 'vrsta_varijacije_id' =>1 ],
            [ 'proizvod_id' => 63, 'vrsta_varijacije_id' =>1 ],
            [ 'proizvod_id' => 64, 'vrsta_varijacije_id' =>1 ],
            [ 'proizvod_id' => 65, 'vrsta_varijacije_id' =>1 ],
            [ 'proizvod_id' => 66, 'vrsta_varijacije_id' =>1 ],
            [ 'proizvod_id' => 67, 'vrsta_varijacije_id' =>1 ],
            [ 'proizvod_id' => 68, 'vrsta_varijacije_id' =>1 ],
            [ 'proizvod_id' => 69, 'vrsta_varijacije_id' =>1 ],
            [ 'proizvod_id' => 70, 'vrsta_varijacije_id' =>1 ],
            [ 'proizvod_id' => 71, 'vrsta_varijacije_id' =>1 ],
            [ 'proizvod_id' => 72, 'vrsta_varijacije_id' =>1 ],
            [ 'proizvod_id' => 73, 'vrsta_varijacije_id' =>1 ],
            [ 'proizvod_id' => 74, 'vrsta_varijacije_id' =>1 ],
            [ 'proizvod_id' => 75, 'vrsta_varijacije_id' =>1 ],
            [ 'proizvod_id' => 76, 'vrsta_varijacije_id' =>1 ],
            [ 'proizvod_id' => 77, 'vrsta_varijacije_id' =>1 ],
            [ 'proizvod_id' => 78, 'vrsta_varijacije_id' =>1 ],
            [ 'proizvod_id' => 79, 'vrsta_varijacije_id' =>1 ],
            [ 'proizvod_id' => 80, 'vrsta_varijacije_id' =>1 ],
        ];

        DB::table('proizvod_vv')->insert($proizvodVvs);
    }
}
