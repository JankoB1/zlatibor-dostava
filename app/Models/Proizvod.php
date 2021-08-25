<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use MongoDB\Driver\Session;

/**
 * App\Models\Proizvod
 *
 * @property int $id
 * @property string $naziv
 * @property string|null $slika
 * @property int $objekat_id
 * @property int $cena
 * @property string|null $opis
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Proizvod newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Proizvod newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Proizvod query()
 * @method static \Illuminate\Database\Eloquent\Builder|Proizvod whereCena($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Proizvod whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Proizvod whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Proizvod whereNaziv($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Proizvod whereObjekatId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Proizvod whereOpis($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Proizvod whereSlika($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Proizvod whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Proizvod extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getObjekat() {
        return $this->belongsTo(Objekat::class);
    }

    public function getVarijacije() {
        return $this->belongsToMany(Varijacija::class, 'proizvod_varijacija', 'proizvod_id');
    }

    public function getPrilozi() {
        return $this->belongsToMany(Prilog::class, 'proizvod_prilog', 'proizvod_id');
    }

    public function getVrsteVarijacije() {
        return $this->belongsToMany(VrstaVarijacije::class, 'proizvod_vv', 'proizvod_id');
    }

    public function dohvatiSveProizvodeKuhinje($kuhinja_id) {
        return Proizvod::query()->where('kuhinja_id', $kuhinja_id)->get();
    }

    public function dohvatiCenuVarijacije($varijacija_id) {
        return DB::table('proizvod_varijacija')
            ->where('proizvod_id', '=', $this->id)
            ->where('varijacija_id', '=', $varijacija_id)
            ->first()
            ->cena;
    }

    public function dohvatiCenuPriloga($prilog_id) {
        return DB::table('proizvod_prilog')
            ->where('proizvod_id', '=', $this->id)
            ->where('prilog_id', '=', $prilog_id)
            ->first()
            ->cena;
    }

    public function imaVarijacije() {
        return !$this->getVarijacije->isEmpty();
    }

    public function putanjaSlike($restoran_id) {
        $restoran = Objekat::query()
            ->where('id', '=', $restoran_id)
            ->first();
        $path = asset('images/objekti/' . $restoran->slug . '/' . $this->slug . '.png');
        return $path;
    }

    public function ispisiVarijacijePoRedosledu() {
        if ($this->imaVarijacije()) {

            $ispis = '';
            $vrsteVarijacija = $this->getVrsteVarijacije;
            $varijacije = $this->getVarijacije;

            if($vrsteVarijacija->first()->slug == 'default') {
                $defaultCena = $this->dohvatiCenuVarijacije($varijacije->first()->id);
                $ispis .= '<input type="hidden" name="' . $vrsteVarijacija->first()->naziv . '" value="' . $defaultCena . '" >';
            } else {

                foreach ($vrsteVarijacija as $vrstaVarijacije) {
                    $ispis .= '<h5 class="varijacija-naziv">' . $vrstaVarijacije->naziv . '</h5>';
                    $i = 1;
                    foreach ($varijacije as $varijacija) {
                        if ($varijacija->vrsta_varijacije_id == $vrstaVarijacije->id) {
                            $cena = $varijacija->dohvatiCenuVarijacije($this->id);
                            $naziv = $varijacija->naziv;
                            $ispis .= '<input type="radio" name="' . $vrstaVarijacije->naziv . '" id="' . $naziv . '" value="' . $cena . '"';
                            if($i == 1) {
                                $ispis .= ' checked="checked" >';
                                $i++;
                            } else {
                                $ispis .= '>';
                            }
                            $ispis .= '<label for="' . $naziv . '">' . $naziv . '</label>';
                        }
                    }
                }
            }

            return $ispis;
        }

        return '';
    }

    public function ispisiPrilogePoRedosledu() {
        $ispis = '';

        $prilozi = $this->getPrilozi;
        foreach ($prilozi as $prilog) {
            $naziv = $prilog->naziv;
            $cena = $prilog->dohvatiCenuPriloga($this->id);
            $ispis .= '<input type="checkbox" name="' . $naziv . '" id="' . $naziv . '" value="' . $cena . '">';
            $ispis .= '<label for="' . $cena . '">' . $naziv . '</label>';
        }

        return $ispis;
    }

}
