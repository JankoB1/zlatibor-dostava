<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProizvodVarijacijaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $proizvodiVarijacije = [
            [ 'proizvod_id' => 1, 'varijacija_id' =>2, 'cena' => 250 ],
            [ 'proizvod_id' => 1, 'varijacija_id' =>3, 'cena' => 570 ],
            [ 'proizvod_id' => 1, 'varijacija_id' =>4, 'cena' => 880 ],
            [ 'proizvod_id' => 2, 'varijacija_id' =>2, 'cena' => 260 ],
            [ 'proizvod_id' => 2, 'varijacija_id' =>3, 'cena' => 590 ],
            [ 'proizvod_id' => 2, 'varijacija_id' =>4, 'cena' => 940 ],
            [ 'proizvod_id' => 3, 'varijacija_id' =>2, 'cena' => 280 ],
            [ 'proizvod_id' => 3, 'varijacija_id' =>3, 'cena' => 690 ],
            [ 'proizvod_id' => 3, 'varijacija_id' =>4, 'cena' => 1090 ],
            [ 'proizvod_id' => 4, 'varijacija_id' =>2, 'cena' => 340 ],
            [ 'proizvod_id' => 4, 'varijacija_id' =>3, 'cena' => 760 ],
            [ 'proizvod_id' => 4, 'varijacija_id' =>4, 'cena' => 1240 ],
            [ 'proizvod_id' => 4, 'varijacija_id' =>5, 'cena' => 0 ],
            [ 'proizvod_id' => 4, 'varijacija_id' =>6, 'cena' => 0 ],
            [ 'proizvod_id' => 5, 'varijacija_id' =>2, 'cena' => 320 ],
            [ 'proizvod_id' => 5, 'varijacija_id' =>3, 'cena' => 720 ],
            [ 'proizvod_id' => 5, 'varijacija_id' =>4, 'cena' => 1120 ],
            [ 'proizvod_id' => 6, 'varijacija_id' =>2, 'cena' => 320 ],
            [ 'proizvod_id' => 6, 'varijacija_id' =>3, 'cena' => 720 ],
            [ 'proizvod_id' => 6, 'varijacija_id' =>4, 'cena' => 1240 ],
            [ 'proizvod_id' => 6, 'varijacija_id' =>5, 'cena' => 0 ],
            [ 'proizvod_id' => 6, 'varijacija_id' =>6, 'cena' => 0 ],
            [ 'proizvod_id' => 7, 'varijacija_id' =>2, 'cena' => 320 ],
            [ 'proizvod_id' => 7, 'varijacija_id' =>3, 'cena' => 720 ],
            [ 'proizvod_id' => 7, 'varijacija_id' =>4, 'cena' => 1240 ],
            [ 'proizvod_id' => 7, 'varijacija_id' =>5, 'cena' => 0 ],
            [ 'proizvod_id' => 7, 'varijacija_id' =>6, 'cena' => 0 ],
            [ 'proizvod_id' => 8, 'varijacija_id' =>2, 'cena' => 320 ],
            [ 'proizvod_id' => 8, 'varijacija_id' =>3, 'cena' => 720 ],
            [ 'proizvod_id' => 8, 'varijacija_id' =>4, 'cena' => 1240 ],
            [ 'proizvod_id' => 8, 'varijacija_id' =>5, 'cena' => 0 ],
            [ 'proizvod_id' => 8, 'varijacija_id' =>6, 'cena' => 0 ],
            [ 'proizvod_id' => 9, 'varijacija_id' =>2, 'cena' => 300 ],
            [ 'proizvod_id' => 9, 'varijacija_id' =>3, 'cena' => 690 ],
            [ 'proizvod_id' => 9, 'varijacija_id' =>4, 'cena' => 1250 ],
            [ 'proizvod_id' => 9, 'varijacija_id' =>5, 'cena' => 0 ],
            [ 'proizvod_id' => 9, 'varijacija_id' =>6, 'cena' => 0 ],
            [ 'proizvod_id' => 10, 'varijacija_id' =>2, 'cena' => 350 ],
            [ 'proizvod_id' => 10, 'varijacija_id' =>3, 'cena' => 850 ],
            [ 'proizvod_id' => 10, 'varijacija_id' =>4, 'cena' => 1370 ],
            [ 'proizvod_id' => 10, 'varijacija_id' =>5, 'cena' => 0 ],
            [ 'proizvod_id' => 10, 'varijacija_id' =>6, 'cena' => 0 ],
            [ 'proizvod_id' => 11, 'varijacija_id' =>2, 'cena' => 370 ],
            [ 'proizvod_id' => 11, 'varijacija_id' =>3, 'cena' => 950 ],
            [ 'proizvod_id' => 11, 'varijacija_id' =>4, 'cena' => 1420 ],
            [ 'proizvod_id' => 11, 'varijacija_id' =>5, 'cena' => 0 ],
            [ 'proizvod_id' => 11, 'varijacija_id' =>6, 'cena' => 0 ],
            [ 'proizvod_id' => 12, 'varijacija_id' =>2, 'cena' => 330 ],
            [ 'proizvod_id' => 12, 'varijacija_id' =>3, 'cena' => 770 ],
            [ 'proizvod_id' => 12, 'varijacija_id' =>4, 'cena' => 1260 ],
            [ 'proizvod_id' => 13, 'varijacija_id' =>2, 'cena' => 600 ],
            [ 'proizvod_id' => 13, 'varijacija_id' =>3, 'cena' => 990 ],
            [ 'proizvod_id' => 13, 'varijacija_id' =>4, 'cena' => 1590 ],
            [ 'proizvod_id' => 14, 'varijacija_id' =>2, 'cena' => 400 ],
            [ 'proizvod_id' => 14, 'varijacija_id' =>3, 'cena' => 950 ],
            [ 'proizvod_id' => 14, 'varijacija_id' =>4, 'cena' => 1450 ],
            [ 'proizvod_id' => 14, 'varijacija_id' =>5, 'cena' => 0 ],
            [ 'proizvod_id' => 14, 'varijacija_id' =>6, 'cena' => 0 ],
            [ 'proizvod_id' => 15, 'varijacija_id' =>2, 'cena' => 500 ],
            [ 'proizvod_id' => 15, 'varijacija_id' =>3, 'cena' => 990 ],
            [ 'proizvod_id' => 15, 'varijacija_id' =>4, 'cena' => 1450 ],
            [ 'proizvod_id' => 16, 'varijacija_id' =>2, 'cena' => 500 ],
            [ 'proizvod_id' => 16, 'varijacija_id' =>3, 'cena' => 950 ],
            [ 'proizvod_id' => 16, 'varijacija_id' =>4, 'cena' => 1390 ],
            [ 'proizvod_id' => 17, 'varijacija_id' =>2, 'cena' => 500 ],
            [ 'proizvod_id' => 17, 'varijacija_id' =>3, 'cena' => 990 ],
            [ 'proizvod_id' => 17, 'varijacija_id' =>4, 'cena' => 1450 ],
            [ 'proizvod_id' => 18, 'varijacija_id' =>1, 'cena' => 2250 ],
            [ 'proizvod_id' => 19, 'varijacija_id' =>2, 'cena' => 400 ],
            [ 'proizvod_id' => 19, 'varijacija_id' =>3, 'cena' => 950 ],
            [ 'proizvod_id' => 19, 'varijacija_id' =>4, 'cena' => 1450 ],
            [ 'proizvod_id' => 19, 'varijacija_id' =>5, 'cena' => 0 ],
            [ 'proizvod_id' => 19, 'varijacija_id' =>6, 'cena' => 0 ],
            [ 'proizvod_id' => 20, 'varijacija_id' =>2, 'cena' => 400 ],
            [ 'proizvod_id' => 20, 'varijacija_id' =>3, 'cena' => 950 ],
            [ 'proizvod_id' => 20, 'varijacija_id' =>4, 'cena' => 1450 ],
            [ 'proizvod_id' => 20, 'varijacija_id' =>5, 'cena' => 0 ],
            [ 'proizvod_id' => 20, 'varijacija_id' =>6, 'cena' => 0 ],
            [ 'proizvod_id' => 21, 'varijacija_id' =>7, 'cena' => 400 ],
            [ 'proizvod_id' => 21, 'varijacija_id' =>8, 'cena' => 400 ],
            [ 'proizvod_id' => 22, 'varijacija_id' =>1, 'cena' => 350 ],
            [ 'proizvod_id' => 23, 'varijacija_id' =>1, 'cena' => 350 ],
            [ 'proizvod_id' => 24, 'varijacija_id' =>1, 'cena' => 650 ],
            [ 'proizvod_id' => 25, 'varijacija_id' =>1, 'cena' => 750 ],
            [ 'proizvod_id' => 26, 'varijacija_id' =>1, 'cena' => 600 ],
            [ 'proizvod_id' => 27, 'varijacija_id' =>1, 'cena' => 600 ],
            [ 'proizvod_id' => 28, 'varijacija_id' =>9, 'cena' => 180 ],
            [ 'proizvod_id' => 28, 'varijacija_id' =>10, 'cena' => 220 ],
            [ 'proizvod_id' => 29, 'varijacija_id' =>9, 'cena' => 210 ],
            [ 'proizvod_id' => 29, 'varijacija_id' =>10, 'cena' => 250 ],
            [ 'proizvod_id' => 30, 'varijacija_id' =>9, 'cena' => 240 ],
            [ 'proizvod_id' => 30, 'varijacija_id' =>10, 'cena' => 290 ],
            [ 'proizvod_id' => 31, 'varijacija_id' =>9, 'cena' => 240 ],
            [ 'proizvod_id' => 31, 'varijacija_id' =>10, 'cena' => 290 ],
            [ 'proizvod_id' => 32, 'varijacija_id' =>9, 'cena' => 270 ],
            [ 'proizvod_id' => 32, 'varijacija_id' =>10, 'cena' => 320 ],
            [ 'proizvod_id' => 33, 'varijacija_id' =>9, 'cena' => 240 ],
            [ 'proizvod_id' => 33, 'varijacija_id' =>10, 'cena' => 290 ],
            [ 'proizvod_id' => 34, 'varijacija_id' =>9, 'cena' => 270 ],
            [ 'proizvod_id' => 34, 'varijacija_id' =>10, 'cena' => 320 ],
            [ 'proizvod_id' => 35, 'varijacija_id' =>9, 'cena' => 290 ],
            [ 'proizvod_id' => 35, 'varijacija_id' =>10, 'cena' => 360 ],
            [ 'proizvod_id' => 36, 'varijacija_id' =>9, 'cena' => 290 ],
            [ 'proizvod_id' => 36, 'varijacija_id' =>10, 'cena' => 360 ],
            [ 'proizvod_id' => 37, 'varijacija_id' =>1, 'cena' => 360 ],
            [ 'proizvod_id' => 38, 'varijacija_id' =>1, 'cena' => 360 ],
            [ 'proizvod_id' => 39, 'varijacija_id' =>9, 'cena' => 290 ],
            [ 'proizvod_id' => 39, 'varijacija_id' =>10, 'cena' => 360 ],
            [ 'proizvod_id' => 40, 'varijacija_id' =>1, 'cena' => 360 ],
            [ 'proizvod_id' => 41, 'varijacija_id' =>1, 'cena' => 360 ],
            [ 'proizvod_id' => 42, 'varijacija_id' =>11, 'cena' => 400 ],
            [ 'proizvod_id' => 42, 'varijacija_id' =>12, 'cena' => 400 ],
            [ 'proizvod_id' => 43, 'varijacija_id' =>1, 'cena' => 350 ],
            [ 'proizvod_id' => 44, 'varijacija_id' =>1, 'cena' => 390 ],
            [ 'proizvod_id' => 45, 'varijacija_id' =>1, 'cena' => 390 ],
            [ 'proizvod_id' => 46, 'varijacija_id' =>1, 'cena' => 350 ],
            [ 'proizvod_id' => 47, 'varijacija_id' =>1, 'cena' => 390 ],
            [ 'proizvod_id' => 48, 'varijacija_id' =>1, 'cena' => 180 ],
            [ 'proizvod_id' => 49, 'varijacija_id' =>1, 'cena' => 600 ],
            [ 'proizvod_id' => 50, 'varijacija_id' =>1, 'cena' => 50 ],
            [ 'proizvod_id' => 51, 'varijacija_id' =>1, 'cena' => 50 ],
            [ 'proizvod_id' => 52, 'varijacija_id' =>1, 'cena' => 200 ],
            [ 'proizvod_id' => 53, 'varijacija_id' =>1, 'cena' => 200 ],
            [ 'proizvod_id' => 54, 'varijacija_id' =>1, 'cena' => 400 ],
            [ 'proizvod_id' => 55, 'varijacija_id' =>1, 'cena' => 350 ],
            [ 'proizvod_id' => 56, 'varijacija_id' =>1, 'cena' => 250 ],
            [ 'proizvod_id' => 57, 'varijacija_id' =>1, 'cena' => 300 ],
            [ 'proizvod_id' => 58, 'varijacija_id' =>1, 'cena' => 300 ],
            [ 'proizvod_id' => 59, 'varijacija_id' =>1, 'cena' => 350 ],
            [ 'proizvod_id' => 60, 'varijacija_id' =>1, 'cena' => 100 ],
            [ 'proizvod_id' => 61, 'varijacija_id' =>13, 'cena' => 150 ],
            [ 'proizvod_id' => 61, 'varijacija_id' =>14, 'cena' => 150 ],
            [ 'proizvod_id' => 62, 'varijacija_id' =>1, 'cena' => 180 ],
            [ 'proizvod_id' => 63, 'varijacija_id' =>1, 'cena' => 180 ],
            [ 'proizvod_id' => 64, 'varijacija_id' =>1, 'cena' => 200 ],
            [ 'proizvod_id' => 65, 'varijacija_id' =>1, 'cena' => 220 ],
            [ 'proizvod_id' => 66, 'varijacija_id' =>1, 'cena' => 200 ],
            [ 'proizvod_id' => 67, 'varijacija_id' =>1, 'cena' => 220 ],
            [ 'proizvod_id' => 68, 'varijacija_id' =>1, 'cena' => 250 ],
            [ 'proizvod_id' => 69, 'varijacija_id' =>1, 'cena' => 250 ],
            [ 'proizvod_id' => 70, 'varijacija_id' =>1, 'cena' => 300 ],
            [ 'proizvod_id' => 71, 'varijacija_id' =>1, 'cena' => 270 ],
            [ 'proizvod_id' => 72, 'varijacija_id' =>1, 'cena' => 300 ],
            [ 'proizvod_id' => 73, 'varijacija_id' =>1, 'cena' => 300 ],
            [ 'proizvod_id' => 74, 'varijacija_id' =>1, 'cena' => 270 ],
            [ 'proizvod_id' => 75, 'varijacija_id' =>1, 'cena' => 300 ],
            [ 'proizvod_id' => 76, 'varijacija_id' =>1, 'cena' => 300 ],
            [ 'proizvod_id' => 77, 'varijacija_id' =>1, 'cena' => 300 ],
            [ 'proizvod_id' => 78, 'varijacija_id' =>1, 'cena' => 300 ],
            [ 'proizvod_id' => 79, 'varijacija_id' =>1, 'cena' => 350 ],
            [ 'proizvod_id' => 80, 'varijacija_id' =>1, 'cena' => 250 ],
        ];

        DB::table('proizvod_varijacija')->insert($proizvodiVarijacije);
    }
}
