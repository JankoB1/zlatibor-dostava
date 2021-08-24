<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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

    public function imaVarijacije() {
        return !$this->getVarijacije->isEmpty();
    }

    public function ispisiVarijacijePoRedosledu() {
        if ($this->imaVarijacije()) {

            $ispis = '<form>';
            $vrsteVarijacija = $this->getVrsteVarijacije;
            $varijacije = $this->getVarijacije;

            foreach ($vrsteVarijacija as $vrstaVarijacije) {
                $ispis .= '<h5 class="varijacija-naziv">' . $vrstaVarijacije->naziv . '</h5>';
                foreach ($varijacije as $varijacija) {
                    if ($varijacija->vrsta_varijacije_id == $vrstaVarijacije->id) {
                        $cena = $varijacija->dohvatiCenuVarijacije($this->id);
                        $naziv = $varijacija->naziv;
                        $ispis .= '<input type="radio" name="' . $vrstaVarijacije->naziv . '" id="' . $naziv . '" value="' . $cena . '">';
                        $ispis .= '<label for="' . $naziv . '">' . $naziv . '</label>';
                    }
                }
            }

            $ispis .= '<a class="dodaj-u-korpu-btn">Dodaj u korpu</a></form>';
            return $ispis;
        }

        return '';
    }

}
