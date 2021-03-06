<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProizvodPrilogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $proizvodiPrilozi = [
            [ 'proizvod_id' => 28, 'prilog_id' =>1, 'cena' => 0 ],
            [ 'proizvod_id' => 28, 'prilog_id' =>2, 'cena' => 0 ],
            [ 'proizvod_id' => 28, 'prilog_id' =>3, 'cena' => 0 ],
            [ 'proizvod_id' => 28, 'prilog_id' =>4, 'cena' => 0 ],
            [ 'proizvod_id' => 28, 'prilog_id' =>5, 'cena' => 0 ],
            [ 'proizvod_id' => 28, 'prilog_id' =>6, 'cena' => 0 ],
            [ 'proizvod_id' => 28, 'prilog_id' =>7, 'cena' => 0 ],
            [ 'proizvod_id' => 28, 'prilog_id' =>8, 'cena' => 0 ],
            [ 'proizvod_id' => 28, 'prilog_id' =>9, 'cena' => 0 ],
            [ 'proizvod_id' => 29, 'prilog_id' =>1, 'cena' => 0 ],
            [ 'proizvod_id' => 29, 'prilog_id' =>2, 'cena' => 0 ],
            [ 'proizvod_id' => 29, 'prilog_id' =>3, 'cena' => 0 ],
            [ 'proizvod_id' => 29, 'prilog_id' =>4, 'cena' => 0 ],
            [ 'proizvod_id' => 29, 'prilog_id' =>5, 'cena' => 0 ],
            [ 'proizvod_id' => 29, 'prilog_id' =>6, 'cena' => 0 ],
            [ 'proizvod_id' => 29, 'prilog_id' =>7, 'cena' => 0 ],
            [ 'proizvod_id' => 29, 'prilog_id' =>8, 'cena' => 0 ],
            [ 'proizvod_id' => 29, 'prilog_id' =>9, 'cena' => 0 ],
            [ 'proizvod_id' => 30, 'prilog_id' =>1, 'cena' => 0 ],
            [ 'proizvod_id' => 30, 'prilog_id' =>2, 'cena' => 0 ],
            [ 'proizvod_id' => 30, 'prilog_id' =>3, 'cena' => 0 ],
            [ 'proizvod_id' => 30, 'prilog_id' =>4, 'cena' => 0 ],
            [ 'proizvod_id' => 30, 'prilog_id' =>5, 'cena' => 0 ],
            [ 'proizvod_id' => 30, 'prilog_id' =>6, 'cena' => 0 ],
            [ 'proizvod_id' => 30, 'prilog_id' =>7, 'cena' => 0 ],
            [ 'proizvod_id' => 30, 'prilog_id' =>8, 'cena' => 0 ],
            [ 'proizvod_id' => 30, 'prilog_id' =>9, 'cena' => 0 ],
            [ 'proizvod_id' => 31, 'prilog_id' =>1, 'cena' => 0 ],
            [ 'proizvod_id' => 31, 'prilog_id' =>2, 'cena' => 0 ],
            [ 'proizvod_id' => 31, 'prilog_id' =>3, 'cena' => 0 ],
            [ 'proizvod_id' => 31, 'prilog_id' =>4, 'cena' => 0 ],
            [ 'proizvod_id' => 31, 'prilog_id' =>5, 'cena' => 0 ],
            [ 'proizvod_id' => 31, 'prilog_id' =>6, 'cena' => 0 ],
            [ 'proizvod_id' => 31, 'prilog_id' =>7, 'cena' => 0 ],
            [ 'proizvod_id' => 31, 'prilog_id' =>8, 'cena' => 0 ],
            [ 'proizvod_id' => 31, 'prilog_id' =>9, 'cena' => 0 ],
            [ 'proizvod_id' => 32, 'prilog_id' =>1, 'cena' => 0 ],
            [ 'proizvod_id' => 32, 'prilog_id' =>2, 'cena' => 0 ],
            [ 'proizvod_id' => 32, 'prilog_id' =>3, 'cena' => 0 ],
            [ 'proizvod_id' => 32, 'prilog_id' =>4, 'cena' => 0 ],
            [ 'proizvod_id' => 32, 'prilog_id' =>5, 'cena' => 0 ],
            [ 'proizvod_id' => 32, 'prilog_id' =>6, 'cena' => 0 ],
            [ 'proizvod_id' => 32, 'prilog_id' =>7, 'cena' => 0 ],
            [ 'proizvod_id' => 32, 'prilog_id' =>8, 'cena' => 0 ],
            [ 'proizvod_id' => 32, 'prilog_id' =>9, 'cena' => 0 ],
            [ 'proizvod_id' => 33, 'prilog_id' =>1, 'cena' => 0 ],
            [ 'proizvod_id' => 33, 'prilog_id' =>2, 'cena' => 0 ],
            [ 'proizvod_id' => 33, 'prilog_id' =>3, 'cena' => 0 ],
            [ 'proizvod_id' => 33, 'prilog_id' =>4, 'cena' => 0 ],
            [ 'proizvod_id' => 33, 'prilog_id' =>5, 'cena' => 0 ],
            [ 'proizvod_id' => 33, 'prilog_id' =>6, 'cena' => 0 ],
            [ 'proizvod_id' => 33, 'prilog_id' =>7, 'cena' => 0 ],
            [ 'proizvod_id' => 33, 'prilog_id' =>8, 'cena' => 0 ],
            [ 'proizvod_id' => 33, 'prilog_id' =>9, 'cena' => 0 ],
            [ 'proizvod_id' => 34, 'prilog_id' =>1, 'cena' => 0 ],
            [ 'proizvod_id' => 34, 'prilog_id' =>2, 'cena' => 0 ],
            [ 'proizvod_id' => 34, 'prilog_id' =>3, 'cena' => 0 ],
            [ 'proizvod_id' => 34, 'prilog_id' =>4, 'cena' => 0 ],
            [ 'proizvod_id' => 34, 'prilog_id' =>5, 'cena' => 0 ],
            [ 'proizvod_id' => 34, 'prilog_id' =>6, 'cena' => 0 ],
            [ 'proizvod_id' => 34, 'prilog_id' =>7, 'cena' => 0 ],
            [ 'proizvod_id' => 34, 'prilog_id' =>8, 'cena' => 0 ],
            [ 'proizvod_id' => 34, 'prilog_id' =>9, 'cena' => 0 ],
            [ 'proizvod_id' => 35, 'prilog_id' =>1, 'cena' => 0 ],
            [ 'proizvod_id' => 35, 'prilog_id' =>2, 'cena' => 0 ],
            [ 'proizvod_id' => 35, 'prilog_id' =>3, 'cena' => 0 ],
            [ 'proizvod_id' => 35, 'prilog_id' =>4, 'cena' => 0 ],
            [ 'proizvod_id' => 35, 'prilog_id' =>5, 'cena' => 0 ],
            [ 'proizvod_id' => 35, 'prilog_id' =>6, 'cena' => 0 ],
            [ 'proizvod_id' => 35, 'prilog_id' =>7, 'cena' => 0 ],
            [ 'proizvod_id' => 35, 'prilog_id' =>8, 'cena' => 0 ],
            [ 'proizvod_id' => 35, 'prilog_id' =>9, 'cena' => 0 ],
            [ 'proizvod_id' => 36, 'prilog_id' =>1, 'cena' => 0 ],
            [ 'proizvod_id' => 36, 'prilog_id' =>2, 'cena' => 0 ],
            [ 'proizvod_id' => 36, 'prilog_id' =>3, 'cena' => 0 ],
            [ 'proizvod_id' => 36, 'prilog_id' =>4, 'cena' => 0 ],
            [ 'proizvod_id' => 36, 'prilog_id' =>5, 'cena' => 0 ],
            [ 'proizvod_id' => 36, 'prilog_id' =>6, 'cena' => 0 ],
            [ 'proizvod_id' => 36, 'prilog_id' =>7, 'cena' => 0 ],
            [ 'proizvod_id' => 36, 'prilog_id' =>8, 'cena' => 0 ],
            [ 'proizvod_id' => 36, 'prilog_id' =>9, 'cena' => 0 ],
            [ 'proizvod_id' => 37, 'prilog_id' =>1, 'cena' => 0 ],
            [ 'proizvod_id' => 37, 'prilog_id' =>2, 'cena' => 0 ],
            [ 'proizvod_id' => 37, 'prilog_id' =>3, 'cena' => 0 ],
            [ 'proizvod_id' => 37, 'prilog_id' =>4, 'cena' => 0 ],
            [ 'proizvod_id' => 37, 'prilog_id' =>5, 'cena' => 0 ],
            [ 'proizvod_id' => 37, 'prilog_id' =>6, 'cena' => 0 ],
            [ 'proizvod_id' => 37, 'prilog_id' =>7, 'cena' => 0 ],
            [ 'proizvod_id' => 37, 'prilog_id' =>8, 'cena' => 0 ],
            [ 'proizvod_id' => 37, 'prilog_id' =>9, 'cena' => 0 ],
            [ 'proizvod_id' => 38, 'prilog_id' =>1, 'cena' => 0 ],
            [ 'proizvod_id' => 38, 'prilog_id' =>2, 'cena' => 0 ],
            [ 'proizvod_id' => 38, 'prilog_id' =>3, 'cena' => 0 ],
            [ 'proizvod_id' => 38, 'prilog_id' =>4, 'cena' => 0 ],
            [ 'proizvod_id' => 38, 'prilog_id' =>5, 'cena' => 0 ],
            [ 'proizvod_id' => 38, 'prilog_id' =>6, 'cena' => 0 ],
            [ 'proizvod_id' => 38, 'prilog_id' =>7, 'cena' => 0 ],
            [ 'proizvod_id' => 38, 'prilog_id' =>8, 'cena' => 0 ],
            [ 'proizvod_id' => 38, 'prilog_id' =>9, 'cena' => 0 ],
            [ 'proizvod_id' => 39, 'prilog_id' =>1, 'cena' => 0 ],
            [ 'proizvod_id' => 39, 'prilog_id' =>2, 'cena' => 0 ],
            [ 'proizvod_id' => 39, 'prilog_id' =>3, 'cena' => 0 ],
            [ 'proizvod_id' => 39, 'prilog_id' =>4, 'cena' => 0 ],
            [ 'proizvod_id' => 39, 'prilog_id' =>5, 'cena' => 0 ],
            [ 'proizvod_id' => 39, 'prilog_id' =>6, 'cena' => 0 ],
            [ 'proizvod_id' => 39, 'prilog_id' =>7, 'cena' => 0 ],
            [ 'proizvod_id' => 39, 'prilog_id' =>8, 'cena' => 0 ],
            [ 'proizvod_id' => 39, 'prilog_id' =>9, 'cena' => 0 ],
            [ 'proizvod_id' => 40, 'prilog_id' =>1, 'cena' => 0 ],
            [ 'proizvod_id' => 40, 'prilog_id' =>2, 'cena' => 0 ],
            [ 'proizvod_id' => 40, 'prilog_id' =>3, 'cena' => 0 ],
            [ 'proizvod_id' => 40, 'prilog_id' =>4, 'cena' => 0 ],
            [ 'proizvod_id' => 40, 'prilog_id' =>5, 'cena' => 0 ],
            [ 'proizvod_id' => 40, 'prilog_id' =>6, 'cena' => 0 ],
            [ 'proizvod_id' => 40, 'prilog_id' =>7, 'cena' => 0 ],
            [ 'proizvod_id' => 40, 'prilog_id' =>8, 'cena' => 0 ],
            [ 'proizvod_id' => 40, 'prilog_id' =>9, 'cena' => 0 ],
            [ 'proizvod_id' => 207, 'prilog_id' =>10, 'cena' => 0 ],
            [ 'proizvod_id' => 207, 'prilog_id' =>11, 'cena' => 0 ],
            [ 'proizvod_id' => 253, 'prilog_id' =>10, 'cena' => 0 ],
            [ 'proizvod_id' => 253, 'prilog_id' =>11, 'cena' => 0 ],
            [ 'proizvod_id' => 253, 'prilog_id' =>12, 'cena' => 0 ],
            [ 'proizvod_id' => 266, 'prilog_id' =>11, 'cena' => 0 ],
            [ 'proizvod_id' => 266, 'prilog_id' =>13, 'cena' => 0 ],
            [ 'proizvod_id' => 267, 'prilog_id' =>11, 'cena' => 0 ],
            [ 'proizvod_id' => 267, 'prilog_id' =>13, 'cena' => 0 ],
            [ 'proizvod_id' => 268, 'prilog_id' =>11, 'cena' => 0 ],
            [ 'proizvod_id' => 268, 'prilog_id' =>13, 'cena' => 0 ],
            [ 'proizvod_id' => 298, 'prilog_id' =>14, 'cena' => 0 ],
            [ 'proizvod_id' => 298, 'prilog_id' =>15, 'cena' => 0 ],
            [ 'proizvod_id' => 298, 'prilog_id' =>16, 'cena' => 0 ],
            [ 'proizvod_id' => 298, 'prilog_id' =>17, 'cena' => 0 ],
            [ 'proizvod_id' => 298, 'prilog_id' =>18, 'cena' => 0 ],
            [ 'proizvod_id' => 300, 'prilog_id' =>14, 'cena' => 0 ],
            [ 'proizvod_id' => 300, 'prilog_id' =>15, 'cena' => 0 ],
            [ 'proizvod_id' => 300, 'prilog_id' =>16, 'cena' => 0 ],
            [ 'proizvod_id' => 300, 'prilog_id' =>17, 'cena' => 0 ],
            [ 'proizvod_id' => 300, 'prilog_id' =>18, 'cena' => 0 ],
            [ 'proizvod_id' => 348, 'prilog_id' =>19, 'cena' => 0 ],
            [ 'proizvod_id' => 348, 'prilog_id' =>20, 'cena' => 0 ],
            [ 'proizvod_id' => 348, 'prilog_id' =>2, 'cena' => 0 ],
            [ 'proizvod_id' => 349, 'prilog_id' =>21, 'cena' => 0 ],
            [ 'proizvod_id' => 349, 'prilog_id' =>22, 'cena' => 0 ],
            [ 'proizvod_id' => 349, 'prilog_id' =>23, 'cena' => 0 ],
            [ 'proizvod_id' => 391, 'prilog_id' =>3, 'cena' => 0 ],
            [ 'proizvod_id' => 391, 'prilog_id' =>4, 'cena' => 0 ],
            [ 'proizvod_id' => 391, 'prilog_id' =>24, 'cena' => 0 ],
            [ 'proizvod_id' => 392, 'prilog_id' =>3, 'cena' => 0 ],
            [ 'proizvod_id' => 392, 'prilog_id' =>4, 'cena' => 0 ],
            [ 'proizvod_id' => 392, 'prilog_id' =>24, 'cena' => 0 ],
            [ 'proizvod_id' => 393, 'prilog_id' =>3, 'cena' => 0 ],
            [ 'proizvod_id' => 393, 'prilog_id' =>4, 'cena' => 0 ],
            [ 'proizvod_id' => 393, 'prilog_id' =>24, 'cena' => 0 ],
            [ 'proizvod_id' => 394, 'prilog_id' =>3, 'cena' => 0 ],
            [ 'proizvod_id' => 394, 'prilog_id' =>4, 'cena' => 0 ],
            [ 'proizvod_id' => 394, 'prilog_id' =>24, 'cena' => 0 ],
            [ 'proizvod_id' => 395, 'prilog_id' =>3, 'cena' => 0 ],
            [ 'proizvod_id' => 395, 'prilog_id' =>4, 'cena' => 0 ],
            [ 'proizvod_id' => 395, 'prilog_id' =>24, 'cena' => 0 ],
            [ 'proizvod_id' => 396, 'prilog_id' =>3, 'cena' => 0 ],
            [ 'proizvod_id' => 396, 'prilog_id' =>4, 'cena' => 0 ],
            [ 'proizvod_id' => 396, 'prilog_id' =>24, 'cena' => 0 ],
            [ 'proizvod_id' => 397, 'prilog_id' =>3, 'cena' => 0 ],
            [ 'proizvod_id' => 397, 'prilog_id' =>4, 'cena' => 0 ],
            [ 'proizvod_id' => 397, 'prilog_id' =>24, 'cena' => 0 ],
            [ 'proizvod_id' => 398, 'prilog_id' =>3, 'cena' => 0 ],
            [ 'proizvod_id' => 398, 'prilog_id' =>4, 'cena' => 0 ],
            [ 'proizvod_id' => 398, 'prilog_id' =>24, 'cena' => 0 ],
            [ 'proizvod_id' => 399, 'prilog_id' =>3, 'cena' => 0 ],
            [ 'proizvod_id' => 399, 'prilog_id' =>4, 'cena' => 0 ],
            [ 'proizvod_id' => 399, 'prilog_id' =>24, 'cena' => 0 ],
            [ 'proizvod_id' => 455, 'prilog_id' =>13, 'cena' => 0 ],
            [ 'proizvod_id' => 455, 'prilog_id' =>25, 'cena' => 0 ],
            [ 'proizvod_id' => 460, 'prilog_id' =>13, 'cena' => 0 ],
            [ 'proizvod_id' => 460, 'prilog_id' =>25, 'cena' => 0 ],
            [ 'proizvod_id' => 652, 'prilog_id' =>26, 'cena' => 95 ],
            [ 'proizvod_id' => 652, 'prilog_id' =>27, 'cena' => 155 ],
            [ 'proizvod_id' => 652, 'prilog_id' =>11, 'cena' => 335 ],
            [ 'proizvod_id' => 652, 'prilog_id' =>25, 'cena' => 335 ],
            [ 'proizvod_id' => 652, 'prilog_id' =>13, 'cena' => 335 ],
            [ 'proizvod_id' => 652, 'prilog_id' =>28, 'cena' => 335 ],
            [ 'proizvod_id' => 653, 'prilog_id' =>26, 'cena' => 95 ],
            [ 'proizvod_id' => 653, 'prilog_id' =>27, 'cena' => 155 ],
            [ 'proizvod_id' => 653, 'prilog_id' =>11, 'cena' => 335 ],
            [ 'proizvod_id' => 653, 'prilog_id' =>25, 'cena' => 335 ],
            [ 'proizvod_id' => 653, 'prilog_id' =>13, 'cena' => 335 ],
            [ 'proizvod_id' => 653, 'prilog_id' =>28, 'cena' => 335 ],
            [ 'proizvod_id' => 654, 'prilog_id' =>26, 'cena' => 95 ],
            [ 'proizvod_id' => 654, 'prilog_id' =>27, 'cena' => 155 ],
            [ 'proizvod_id' => 654, 'prilog_id' =>11, 'cena' => 335 ],
            [ 'proizvod_id' => 654, 'prilog_id' =>25, 'cena' => 335 ],
            [ 'proizvod_id' => 654, 'prilog_id' =>13, 'cena' => 335 ],
            [ 'proizvod_id' => 654, 'prilog_id' =>28, 'cena' => 335 ],
            [ 'proizvod_id' => 654, 'prilog_id' =>19, 'cena' => 65 ],
            [ 'proizvod_id' => 654, 'prilog_id' =>3, 'cena' => 65 ],
            [ 'proizvod_id' => 654, 'prilog_id' =>2, 'cena' => 65 ],
            [ 'proizvod_id' => 654, 'prilog_id' =>29, 'cena' => 65 ],
            [ 'proizvod_id' => 654, 'prilog_id' =>30, 'cena' => 65 ],
            [ 'proizvod_id' => 654, 'prilog_id' =>31, 'cena' => 65 ],
            [ 'proizvod_id' => 655, 'prilog_id' =>26, 'cena' => 95 ],
            [ 'proizvod_id' => 655, 'prilog_id' =>27, 'cena' => 155 ],
            [ 'proizvod_id' => 655, 'prilog_id' =>11, 'cena' => 335 ],
            [ 'proizvod_id' => 655, 'prilog_id' =>25, 'cena' => 335 ],
            [ 'proizvod_id' => 655, 'prilog_id' =>13, 'cena' => 335 ],
            [ 'proizvod_id' => 655, 'prilog_id' =>28, 'cena' => 335 ],
            [ 'proizvod_id' => 655, 'prilog_id' =>19, 'cena' => 65 ],
            [ 'proizvod_id' => 655, 'prilog_id' =>3, 'cena' => 65 ],
            [ 'proizvod_id' => 655, 'prilog_id' =>2, 'cena' => 65 ],
            [ 'proizvod_id' => 655, 'prilog_id' =>29, 'cena' => 65 ],
            [ 'proizvod_id' => 655, 'prilog_id' =>30, 'cena' => 65 ],
            [ 'proizvod_id' => 655, 'prilog_id' =>31, 'cena' => 65 ],
            [ 'proizvod_id' => 656, 'prilog_id' =>26, 'cena' => 95 ],
            [ 'proizvod_id' => 656, 'prilog_id' =>27, 'cena' => 155 ],
            [ 'proizvod_id' => 656, 'prilog_id' =>11, 'cena' => 335 ],
            [ 'proizvod_id' => 656, 'prilog_id' =>25, 'cena' => 335 ],
            [ 'proizvod_id' => 656, 'prilog_id' =>13, 'cena' => 335 ],
            [ 'proizvod_id' => 656, 'prilog_id' =>28, 'cena' => 335 ],
            [ 'proizvod_id' => 656, 'prilog_id' =>19, 'cena' => 65 ],
            [ 'proizvod_id' => 656, 'prilog_id' =>3, 'cena' => 65 ],
            [ 'proizvod_id' => 656, 'prilog_id' =>2, 'cena' => 65 ],
            [ 'proizvod_id' => 656, 'prilog_id' =>29, 'cena' => 65 ],
            [ 'proizvod_id' => 656, 'prilog_id' =>30, 'cena' => 65 ],
            [ 'proizvod_id' => 656, 'prilog_id' =>31, 'cena' => 65 ],
            [ 'proizvod_id' => 657, 'prilog_id' =>26, 'cena' => 95 ],
            [ 'proizvod_id' => 657, 'prilog_id' =>27, 'cena' => 155 ],
            [ 'proizvod_id' => 657, 'prilog_id' =>11, 'cena' => 335 ],
            [ 'proizvod_id' => 657, 'prilog_id' =>25, 'cena' => 335 ],
            [ 'proizvod_id' => 657, 'prilog_id' =>13, 'cena' => 335 ],
            [ 'proizvod_id' => 657, 'prilog_id' =>28, 'cena' => 335 ],
            [ 'proizvod_id' => 657, 'prilog_id' =>19, 'cena' => 65 ],
            [ 'proizvod_id' => 657, 'prilog_id' =>3, 'cena' => 65 ],
            [ 'proizvod_id' => 657, 'prilog_id' =>2, 'cena' => 65 ],
            [ 'proizvod_id' => 657, 'prilog_id' =>29, 'cena' => 65 ],
            [ 'proizvod_id' => 657, 'prilog_id' =>30, 'cena' => 65 ],
            [ 'proizvod_id' => 657, 'prilog_id' =>31, 'cena' => 65 ],
            [ 'proizvod_id' => 658, 'prilog_id' =>26, 'cena' => 95 ],
            [ 'proizvod_id' => 658, 'prilog_id' =>27, 'cena' => 155 ],
            [ 'proizvod_id' => 658, 'prilog_id' =>11, 'cena' => 335 ],
            [ 'proizvod_id' => 658, 'prilog_id' =>25, 'cena' => 335 ],
            [ 'proizvod_id' => 658, 'prilog_id' =>13, 'cena' => 335 ],
            [ 'proizvod_id' => 658, 'prilog_id' =>28, 'cena' => 335 ],
            [ 'proizvod_id' => 658, 'prilog_id' =>19, 'cena' => 65 ],
            [ 'proizvod_id' => 658, 'prilog_id' =>3, 'cena' => 65 ],
            [ 'proizvod_id' => 658, 'prilog_id' =>2, 'cena' => 65 ],
            [ 'proizvod_id' => 658, 'prilog_id' =>29, 'cena' => 65 ],
            [ 'proizvod_id' => 658, 'prilog_id' =>30, 'cena' => 65 ],
            [ 'proizvod_id' => 658, 'prilog_id' =>31, 'cena' => 65 ],
            [ 'proizvod_id' => 659, 'prilog_id' =>26, 'cena' => 95 ],
            [ 'proizvod_id' => 659, 'prilog_id' =>27, 'cena' => 155 ],
            [ 'proizvod_id' => 659, 'prilog_id' =>11, 'cena' => 335 ],
            [ 'proizvod_id' => 659, 'prilog_id' =>25, 'cena' => 335 ],
            [ 'proizvod_id' => 659, 'prilog_id' =>13, 'cena' => 335 ],
            [ 'proizvod_id' => 659, 'prilog_id' =>28, 'cena' => 335 ],
            [ 'proizvod_id' => 659, 'prilog_id' =>19, 'cena' => 65 ],
            [ 'proizvod_id' => 659, 'prilog_id' =>3, 'cena' => 65 ],
            [ 'proizvod_id' => 659, 'prilog_id' =>2, 'cena' => 65 ],
            [ 'proizvod_id' => 659, 'prilog_id' =>29, 'cena' => 65 ],
            [ 'proizvod_id' => 659, 'prilog_id' =>30, 'cena' => 65 ],
            [ 'proizvod_id' => 659, 'prilog_id' =>31, 'cena' => 65 ],
            [ 'proizvod_id' => 660, 'prilog_id' =>26, 'cena' => 95 ],
            [ 'proizvod_id' => 660, 'prilog_id' =>27, 'cena' => 155 ],
            [ 'proizvod_id' => 660, 'prilog_id' =>11, 'cena' => 335 ],
            [ 'proizvod_id' => 660, 'prilog_id' =>25, 'cena' => 335 ],
            [ 'proizvod_id' => 660, 'prilog_id' =>13, 'cena' => 335 ],
            [ 'proizvod_id' => 660, 'prilog_id' =>28, 'cena' => 335 ],
            [ 'proizvod_id' => 660, 'prilog_id' =>19, 'cena' => 65 ],
            [ 'proizvod_id' => 660, 'prilog_id' =>3, 'cena' => 65 ],
            [ 'proizvod_id' => 660, 'prilog_id' =>2, 'cena' => 65 ],
            [ 'proizvod_id' => 660, 'prilog_id' =>29, 'cena' => 65 ],
            [ 'proizvod_id' => 660, 'prilog_id' =>30, 'cena' => 65 ],
            [ 'proizvod_id' => 660, 'prilog_id' =>31, 'cena' => 65 ],
            [ 'proizvod_id' => 661, 'prilog_id' =>26, 'cena' => 95 ],
            [ 'proizvod_id' => 661, 'prilog_id' =>27, 'cena' => 155 ],
            [ 'proizvod_id' => 661, 'prilog_id' =>11, 'cena' => 335 ],
            [ 'proizvod_id' => 661, 'prilog_id' =>25, 'cena' => 335 ],
            [ 'proizvod_id' => 661, 'prilog_id' =>13, 'cena' => 335 ],
            [ 'proizvod_id' => 661, 'prilog_id' =>28, 'cena' => 335 ],
            [ 'proizvod_id' => 661, 'prilog_id' =>19, 'cena' => 65 ],
            [ 'proizvod_id' => 661, 'prilog_id' =>3, 'cena' => 65 ],
            [ 'proizvod_id' => 661, 'prilog_id' =>2, 'cena' => 65 ],
            [ 'proizvod_id' => 661, 'prilog_id' =>29, 'cena' => 65 ],
            [ 'proizvod_id' => 661, 'prilog_id' =>30, 'cena' => 65 ],
            [ 'proizvod_id' => 661, 'prilog_id' =>31, 'cena' => 65 ],
            [ 'proizvod_id' => 662, 'prilog_id' =>26, 'cena' => 95 ],
            [ 'proizvod_id' => 662, 'prilog_id' =>27, 'cena' => 155 ],
            [ 'proizvod_id' => 662, 'prilog_id' =>11, 'cena' => 335 ],
            [ 'proizvod_id' => 662, 'prilog_id' =>25, 'cena' => 335 ],
            [ 'proizvod_id' => 662, 'prilog_id' =>13, 'cena' => 335 ],
            [ 'proizvod_id' => 662, 'prilog_id' =>28, 'cena' => 335 ],
            [ 'proizvod_id' => 662, 'prilog_id' =>19, 'cena' => 65 ],
            [ 'proizvod_id' => 662, 'prilog_id' =>3, 'cena' => 65 ],
            [ 'proizvod_id' => 662, 'prilog_id' =>2, 'cena' => 65 ],
            [ 'proizvod_id' => 662, 'prilog_id' =>29, 'cena' => 65 ],
            [ 'proizvod_id' => 662, 'prilog_id' =>30, 'cena' => 65 ],
            [ 'proizvod_id' => 662, 'prilog_id' =>31, 'cena' => 65 ],
            [ 'proizvod_id' => 663, 'prilog_id' =>26, 'cena' => 95 ],
            [ 'proizvod_id' => 663, 'prilog_id' =>27, 'cena' => 155 ],
            [ 'proizvod_id' => 663, 'prilog_id' =>11, 'cena' => 335 ],
            [ 'proizvod_id' => 663, 'prilog_id' =>25, 'cena' => 335 ],
            [ 'proizvod_id' => 663, 'prilog_id' =>13, 'cena' => 335 ],
            [ 'proizvod_id' => 663, 'prilog_id' =>28, 'cena' => 335 ],
            [ 'proizvod_id' => 663, 'prilog_id' =>19, 'cena' => 65 ],
            [ 'proizvod_id' => 663, 'prilog_id' =>3, 'cena' => 65 ],
            [ 'proizvod_id' => 663, 'prilog_id' =>2, 'cena' => 65 ],
            [ 'proizvod_id' => 663, 'prilog_id' =>29, 'cena' => 65 ],
            [ 'proizvod_id' => 663, 'prilog_id' =>30, 'cena' => 65 ],
            [ 'proizvod_id' => 663, 'prilog_id' =>31, 'cena' => 65 ],
            [ 'proizvod_id' => 664, 'prilog_id' =>26, 'cena' => 95 ],
            [ 'proizvod_id' => 664, 'prilog_id' =>27, 'cena' => 155 ],
            [ 'proizvod_id' => 664, 'prilog_id' =>11, 'cena' => 335 ],
            [ 'proizvod_id' => 664, 'prilog_id' =>25, 'cena' => 335 ],
            [ 'proizvod_id' => 664, 'prilog_id' =>13, 'cena' => 335 ],
            [ 'proizvod_id' => 664, 'prilog_id' =>28, 'cena' => 335 ],
            [ 'proizvod_id' => 664, 'prilog_id' =>19, 'cena' => 65 ],
            [ 'proizvod_id' => 664, 'prilog_id' =>3, 'cena' => 65 ],
            [ 'proizvod_id' => 664, 'prilog_id' =>2, 'cena' => 65 ],
            [ 'proizvod_id' => 664, 'prilog_id' =>29, 'cena' => 65 ],
            [ 'proizvod_id' => 664, 'prilog_id' =>30, 'cena' => 65 ],
            [ 'proizvod_id' => 664, 'prilog_id' =>31, 'cena' => 65 ],
            [ 'proizvod_id' => 665, 'prilog_id' =>26, 'cena' => 95 ],
            [ 'proizvod_id' => 665, 'prilog_id' =>27, 'cena' => 155 ],
            [ 'proizvod_id' => 665, 'prilog_id' =>11, 'cena' => 335 ],
            [ 'proizvod_id' => 665, 'prilog_id' =>25, 'cena' => 335 ],
            [ 'proizvod_id' => 665, 'prilog_id' =>13, 'cena' => 335 ],
            [ 'proizvod_id' => 665, 'prilog_id' =>28, 'cena' => 335 ],
            [ 'proizvod_id' => 665, 'prilog_id' =>19, 'cena' => 65 ],
            [ 'proizvod_id' => 665, 'prilog_id' =>3, 'cena' => 65 ],
            [ 'proizvod_id' => 665, 'prilog_id' =>2, 'cena' => 65 ],
            [ 'proizvod_id' => 665, 'prilog_id' =>29, 'cena' => 65 ],
            [ 'proizvod_id' => 665, 'prilog_id' =>30, 'cena' => 65 ],
            [ 'proizvod_id' => 665, 'prilog_id' =>31, 'cena' => 65 ],
            [ 'proizvod_id' => 666, 'prilog_id' =>26, 'cena' => 95 ],
            [ 'proizvod_id' => 666, 'prilog_id' =>27, 'cena' => 155 ],
            [ 'proizvod_id' => 666, 'prilog_id' =>11, 'cena' => 335 ],
            [ 'proizvod_id' => 666, 'prilog_id' =>25, 'cena' => 335 ],
            [ 'proizvod_id' => 666, 'prilog_id' =>13, 'cena' => 335 ],
            [ 'proizvod_id' => 666, 'prilog_id' =>28, 'cena' => 335 ],
            [ 'proizvod_id' => 666, 'prilog_id' =>19, 'cena' => 65 ],
            [ 'proizvod_id' => 666, 'prilog_id' =>3, 'cena' => 65 ],
            [ 'proizvod_id' => 666, 'prilog_id' =>2, 'cena' => 65 ],
            [ 'proizvod_id' => 666, 'prilog_id' =>29, 'cena' => 65 ],
            [ 'proizvod_id' => 666, 'prilog_id' =>30, 'cena' => 65 ],
            [ 'proizvod_id' => 666, 'prilog_id' =>31, 'cena' => 65 ],
            [ 'proizvod_id' => 667, 'prilog_id' =>3, 'cena' => 65 ],
            [ 'proizvod_id' => 667, 'prilog_id' =>19, 'cena' => 65 ],
            [ 'proizvod_id' => 667, 'prilog_id' =>2, 'cena' => 65 ],
            [ 'proizvod_id' => 667, 'prilog_id' =>31, 'cena' => 65 ],
        ];

        DB::table('proizvod_prilog')->insert($proizvodiPrilozi);
    }
}
