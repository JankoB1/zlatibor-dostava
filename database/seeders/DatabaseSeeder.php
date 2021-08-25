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
        $this->call(VrstaVarijacijaTableSeeder::class);
        $this->call(VarijacijaTableSeeder::class);
        $this->call(ProizvodPrilogTableSeeder::class);
        $this->call(ProizvodVarijacijaTableSeeder::class);
        $this->call(PrilogTableSeeder::class);
        $this->call(ProizvodVVTableSeeder::class);
    }
}
