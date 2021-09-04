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
            ['naziv' => 'Mešano varivo', 'slug' => 'mesano-varivo'],
            ['naziv' => 'Pomfrit', 'slug' => 'pomfrit'],
            ['naziv' => 'Dalmatinsko varivo', 'slug' => 'dalmatinsko-varivo'],
            ['naziv' => 'Grilovano povrće', 'slug' => 'grilovano-povrce'],
            ['naziv' => 'Eurokrem', 'slug' => 'eurokrem'],
            ['naziv' => 'Džem od kajsija', 'slug' => 'dzem-od-kajsija'],
            ['naziv' => 'Orasi', 'slug' => 'orasi'],
            ['naziv' => 'Šećer', 'slug' => 'secer'],
            ['naziv' => 'Plazma', 'slug' => 'plazma'],
            ['naziv' => 'Pavlaka', 'slug' => 'pavlaka'],
            ['naziv' => 'Feta sir', 'slug' => 'feta-sir'],
            ['naziv' => 'Kuvano jaje', 'slug' => 'kuvano-jaje'],
            ['naziv' => 'Kajgana', 'slug' => 'kajgana'],
            ['naziv' => 'Jaje na oko', 'slug' => 'jaje-na-oko'],
            ['naziv' => 'Ljuti senf', 'slug' => 'ljuti-senf'],
            ['naziv' => 'Domaći krompir', 'slug' => 'domaci-krompir'],
            ['naziv' => 'Kuver', 'slug' => 'kuver'],
            ['naziv' => 'Hleb', 'slug' => 'hleb'],
            ['naziv' => 'Pire', 'slug' => 'pire'],
            ['naziv' => 'BBQ sos', 'slug' => 'bbq-sos'],
            ['naziv' => 'Marinada', 'slug' => 'marinada'],
            ['naziv' => 'Tartar', 'slug' => 'tartar'],
        ];

        foreach ($prilozi as $prilog) {
            Prilog::create($prilog);
        }
    }
}
