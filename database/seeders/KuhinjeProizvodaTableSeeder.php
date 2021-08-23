<?php

namespace Database\Seeders;

use App\Models\KuhinjaProizvoda;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KuhinjeProizvodaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kuhinjeProizvoda = [
            ['naziv' => 'Pizza', 'slug' => 'pizza'],
            ['naziv' => 'Meso', 'slug' => 'meso'],
            ['naziv' => 'Sendviči', 'slug' => 'sendvici'],
            ['naziv' => 'Razno', 'slug' => 'razno'],
            ['naziv' => 'Slane palačinke', 'slug' => 'slane-palacinke'],
            ['naziv' => 'Slatke palačinke', 'slug' => 'slatke-palacinke'],
            ['naziv' => 'Snack', 'slug' => 'snack'],
            ['naziv' => 'Supe i čorbe', 'slug' => 'supe-i-corbe'],
            ['naziv' => 'Obrok salate', 'slug' => 'obrok-salate'],
            ['naziv' => 'Rižoto', 'slug' => 'rizoto'],
            ['naziv' => 'Pasta', 'slug' => 'pasta'],
            ['naziv' => 'Žuti tanjir', 'slug' => 'zuti-tanjir'],
            ['naziv' => 'Specijaliteti', 'slug' => 'specijaliteti'],
            ['naziv' => 'Riba i plodovi mora', 'slug' => 'riba-i-plodovi-mora'],
            ['naziv' => 'Salate', 'slug' => 'salate'],
            ['naziv' => 'Palačinke', 'slug' => 'palacinke'],
            ['naziv' => 'Poslastice', 'slug' => 'poslastice'],
            ['naziv' => 'Domaći specijaliteti', 'slug' => 'domaci-specijaliteti'],
            ['naziv' => 'Specijaliteti sa roštilja', 'slug' => 'specijaliteti-sa-rostilja'],
            ['naziv' => 'Jela po narudžbini', 'slug' => 'jela-po-narudzbini'],
            ['naziv' => 'Gotova jela', 'slug' => 'gotova-jela'],
            ['naziv' => 'Topla i hladna jela', 'slug' => 'topla-i-hladna-jela'],
            ['naziv' => 'Hladna predjela', 'slug' => 'hladna-predjela'],
            ['naziv' => 'Topla predjela', 'slug' => 'topla-predjela'],
            ['naziv' => 'Riba', 'slug' => 'riba'],
            ['naziv' => 'Biftek', 'slug' => 'biftek'],
            ['naziv' => 'Dodatak jelima', 'slug' => 'dodatak-jelima'],
            ['naziv' => 'Pivo i citrusi', 'slug' => 'pivo-i-citrusi'],
            ['naziv' => 'Belo vino', 'slug' => 'belo-vino'],
            ['naziv' => 'Crvena vina', 'slug' => 'crvena-vina'],
            ['naziv' => 'Roze vina', 'slug' => 'roze-vina'],
            ['naziv' => 'Desertna vina', 'slug' => 'desertna-vina'],
            ['naziv' => 'Doručak', 'slug' => 'dorucak'],
            ['naziv' => 'Kobasice', 'slug' => 'kobasice'],
            ['naziv' => 'Tost sendviči', 'slug' => 'tost-sendvici'],
            ['naziv' => 'Porodične pice', 'slug' => 'porodicne-pice'],
            ['naziv' => 'Burito', 'slug' => 'burito'],
            ['naziv' => 'Obrok salate', 'slug' => 'obrok-salate'],
            ['naziv' => 'Dečiji meni', 'slug' => 'deciji-meni'],
            ['naziv' => 'Pecivo', 'slug' => 'pecivo'],
            ['naziv' => 'Ostalo', 'slug' => 'ostalo'],
            ['naziv' => 'Sočno', 'slug' => 'socno'],
            ['naziv' => 'Komplet lepinje', 'slug' => 'komplet-lepinje'],
            ['naziv' => 'Stekovi i burgeri', 'slug' => 'stekovi-i-burgeri'],
            ['naziv' => 'Pre ručka i večere', 'slug' => 'pre-rucka-i-vecere'],
            ['naziv' => 'Pasta i rižoto', 'slug' => 'pasta-i-rizoto'],
            ['naziv' => 'Hleb', 'slug' => 'hleb'],
            ['naziv' => 'Pica bar', 'slug' => 'pica-bar'],
            ['naziv' => 'Deserti', 'slug' => 'deserti'],
            ['naziv' => 'Predjela', 'slug' => 'predjela'],
            ['naziv' => 'Testenine', 'slug' => 'testenine'],
            ['naziv' => 'Piletina i ćuretina', 'slug' => 'piletina-i-curetina'],
            ['naziv' => 'Svinjetina', 'slug' => 'svinjetina'],
            ['naziv' => 'Teletina i junetina', 'slug' => 'teletina-i-junetina'],
            ['naziv' => 'Roštilj', 'slug' => 'rostilj'],
            ['naziv' => 'Variva, prilozi i sosevi', 'slug' => 'variva-prilozi-i-sosevi'],
            ['naziv' => 'Sirevi', 'slug' => 'sirevi'],
            ['naziv' => 'Hleb i pecivo', 'slug' => 'hleb-i-pecivo'],
            ['naziv' => 'Burgeri', 'slug' => 'burgeri'],
            ['naziv' => 'Tortilje', 'slug' => 'tortilje'],
            ['naziv' => 'Glavna jela', 'slug' => 'glavna-jela'],
            ['naziv' => 'Penušava vina i šampanjci', 'slug' => 'penusava-vina-i-sampanjci'],
            ['naziv' => 'Kafe i topli napici', 'slug' => 'kafe-i-topli-napici'],
            ['naziv' => 'Krofne', 'slug' => 'krofne'],
            ['naziv' => 'Špageti i paste', 'slug' => 'spageti-i-paste'],
            ['naziv' => 'Penušava vina', 'slug' => 'penusava-vina'],
            ['naziv' => 'Vina 187 ml', 'slug' => 'vina-187-ml'],
            ['naziv' => 'Sveže ceđeni sokovi', 'slug' => 'sveže-ceđeni-sokovi'],
            ['naziv' => 'Piće', 'slug' => 'pice'],
            ['naziv' => 'Hleb i variva', 'slug' => 'hleb-i-variva']
        ];

        foreach ($kuhinjeProizvoda as $kuhinjaProizvoda) {
            KuhinjaProizvoda::create($kuhinjaProizvoda);
        }
    }
}
