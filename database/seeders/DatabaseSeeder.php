<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(KuhinjasTableSeeder::class);
        $this->call(VrsteObjektaSeeder::class);
        $this->call(ObjektiTableSeeder::class);
        $this->call(KuhinjaObjekatTableSeeder::class);
        $this->call(ProizvodiTableSeeder::class);
        $this->call(KuhinjeProizvodaTableSeeder::class);
        $this->call(KuhinjaProizvodaObjekatTableSeeder::class);
    }
}
