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
            ['naziv' => 'Svinjska', 'slug' => 'svinjetina', 'vrsta_varijacije_id' => '4'],
            ['naziv' => 'Pileća', 'slug' => 'piletina', 'vrsta_varijacije_id' => '4'],
            ['naziv' => 'Mali', 'slug' => 'mali', 'vrsta_varijacije_id' => '2'],
            ['naziv' => 'Veliki', 'slug' => 'veliki', 'vrsta_varijacije_id' => '2'],
            ['naziv' => 'Neljuti', 'slug' => 'neljuti', 'vrsta_varijacije_id' => '5'],
            ['naziv' => 'Ljuti', 'slug' => 'ljuti', 'vrsta_varijacije_id' => '5'],
            ['naziv' => 'Šipurak', 'slug' => 'sipurak', 'vrsta_varijacije_id' => '6'],
            ['naziv' => 'Kajsija', 'slug' => 'kajsija', 'vrsta_varijacije_id' => '6'],
            ['naziv' => 'Pene', 'slug' => 'pene', 'vrsta_varijacije_id' => '7'],
            ['naziv' => 'Špagete', 'slug' => 'spagete', 'vrsta_varijacije_id' => '7'],
            ['naziv' => 'Taljatele', 'slug' => 'taljatele', 'vrsta_varijacije_id' => '7'],
            ['naziv' => 'Pene bez glutena', 'slug' => 'pene-bez-glutena', 'vrsta_varijacije_id' => '7'],
            ['naziv' => 'Sir', 'slug' => 'sir', 'vrsta_varijacije_id' => '8'],
            ['naziv' => 'Biljni sir', 'slug' => 'biljni-sir', 'vrsta_varijacije_id' => '8'],
            ['naziv' => 'Vešalica', 'slug' => 'vesalica', 'vrsta_varijacije_id' => '4'],
            ['naziv' => 'Kobasica', 'slug' => 'kobasica', 'vrsta_varijacije_id' => '4'],
            ['naziv' => 'Rebra', 'slug' => 'rebra', 'vrsta_varijacije_id' => '4'],
            ['naziv' => 'Pire', 'slug' => 'pire', 'vrsta_varijacije_id' => '9'],
            ['naziv' => 'Makarone', 'slug' => 'makarone', 'vrsta_varijacije_id' => '7'],
            ['naziv' => 'Pirinač', 'slug' => 'pirinac', 'vrsta_varijacije_id' => '9'],
            ['naziv' => 'Živ', 'slug' => 'ziv', 'vrsta_varijacije_id' => '10'],
            ['naziv' => 'Srednje pečen', 'slug' => 'srednje-pecen', 'vrsta_varijacije_id' => '10'],
            ['naziv' => 'Dobro pečen', 'slug' => 'dobro-pecen', 'vrsta_varijacije_id' => '10'],
            ['naziv' => 'Sa lukom', 'slug' => 'sa-lukom', 'vrsta_varijacije_id' => '11'],
            ['naziv' => 'Bez luka', 'slug' => 'bez-luka', 'vrsta_varijacije_id' => '11'],
            ['naziv' => 'Kuvano jaje', 'slug' => 'kuvano-jaje', 'vrsta_varijacije_id' => '12'],
            ['naziv' => 'Kajgana', 'slug' => 'kajgana', 'vrsta_varijacije_id' => '12'],
            ['naziv' => 'Jaje na oko', 'slug' => 'jaje-na-oko', 'vrsta_varijacije_id' => '12'],
            ['naziv' => 'Goveđa ljuta', 'slug' => 'govedja-ljuta', 'vrsta_varijacije_id' => '13'],
            ['naziv' => 'Goveđa sa sirom', 'slug' => 'govedja-sa-sirom', 'vrsta_varijacije_id' => '13'],
            ['naziv' => 'Vrelo ljuta', 'slug' => 'vrelo-ljuta', 'vrsta_varijacije_id' => '13'],
            ['naziv' => 'Vrelo sir', 'slug' => 'vrelo-sir', 'vrsta_varijacije_id' => '13'],
            ['naziv' => 'Domaća kobasica', 'slug' => 'domaca-kobasica', 'vrsta_varijacije_id' => '13'],
            ['naziv' => 'Domaća ljuta kobasica', 'slug' => 'domaca-ljuta-kobasica', 'vrsta_varijacije_id' => '13'],
            ['naziv' => 'Pivska kobasica', 'slug' => 'pivska-kobasica', 'vrsta_varijacije_id' => '13'],
            ['naziv' => 'Nutela', 'slug' => 'nutela', 'vrsta_varijacije_id' => '14'],
            ['naziv' => 'Eurokrem', 'slug' => 'eurokrem', 'vrsta_varijacije_id' => '14'],
            ['naziv' => 'Džem', 'slug' => 'dzem', 'vrsta_varijacije_id' => '6'],
            ['naziv' => 'Pomfrit', 'slug' => 'pomfrit', 'vrsta_varijacije_id' => '9'],
            ['naziv' => 'Domaćinski krompir', 'slug' => 'domacinski-krompir', 'vrsta_varijacije_id' => '9'],
            ['naziv' => '300g', 'slug' => '300g', 'vrsta_varijacije_id' => '2'],
            ['naziv' => '400g', 'slug' => '400g', 'vrsta_varijacije_id' => '2'],
            ['naziv' => '500g', 'slug' => '500g', 'vrsta_varijacije_id' => '2'],
            ['naziv' => '600g', 'slug' => '600g', 'vrsta_varijacije_id' => '2'],
            ['naziv' => '700g', 'slug' => '700g', 'vrsta_varijacije_id' => '2'],
            ['naziv' => '800g', 'slug' => '800g', 'vrsta_varijacije_id' => '2'],
            ['naziv' => '900g', 'slug' => '900g', 'vrsta_varijacije_id' => '2'],
            ['naziv' => '1kg', 'slug' => '1kg', 'vrsta_varijacije_id' => '2'],
            ['naziv' => 'Za 2 osobe', 'slug' => 'za-2-osobe', 'vrsta_varijacije_id' => '2'],
            ['naziv' => 'Za 4 osobe', 'slug' => 'za-4-osobe', 'vrsta_varijacije_id' => '2'],
            ['naziv' => '25cm', 'slug' => '25cm', 'vrsta_varijacije_id' => '2'],
            ['naziv' => '32cm', 'slug' => '32cm', 'vrsta_varijacije_id' => '2'],
            ['naziv' => 'Goveđa', 'slug' => 'govedja', 'vrsta_varijacije_id' => '4'],
            ['naziv' => 'Paradajz', 'slug' => 'paradajz', 'vrsta_varijacije_id' => '15'],
            ['naziv' => 'Kupus', 'slug' => 'kupus', 'vrsta_varijacije_id' => '15'],
            ['naziv' => 'Zelena salata', 'slug' => 'zelena-salata', 'vrsta_varijacije_id' => '15'],
            ['naziv' => 'Krastavac salata', 'slug' => 'krastavac-salata', 'vrsta_varijacije_id' => '15'],
            ['naziv' => '190g', 'slug' => '190g', 'vrsta_varijacije_id' => '2'],
            ['naziv' => 'Šunka', 'slug' => 'sunka', 'vrsta_varijacije_id' => '4'],
            ['naziv' => 'Pljeskavica', 'slug' => 'pljeskavica', 'vrsta_varijacije_id' => '4'],
            ['naziv' => 'Mlinci', 'slug' => 'mlinci', 'vrsta_varijacije_id' => '4'],
            ['naziv' => 'Šljiva', 'slug' => 'sljiva', 'vrsta_varijacije_id' => '6'],
            ['naziv' => 'Jagoda', 'slug' => 'jagoda', 'vrsta_varijacije_id' => '6'],
            ['naziv' => 'Kobasica sa sirom', 'slug' => 'kobasica-sa-sirom', 'vrsta_varijacije_id' => '4'],
            ['naziv' => '28cm', 'slug' => '28cm', 'vrsta_varijacije_id' => '2'],
        ];

        foreach ($varijacije as $varijacija) {
            Varijacija::create($varijacija);
        }
    }
}
