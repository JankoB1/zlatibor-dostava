<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Objekat
 *
 * @property int $id
 * @property string $naziv
 * @property string|null $slika
 * @property int $vrsta_objekta_id
 * @property string|null $opis
 * @property string|null $logo
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\VrstaObjekta $vrstaObjekta
 * @method static \Illuminate\Database\Eloquent\Builder|Objekat newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Objekat newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Objekat query()
 * @method static \Illuminate\Database\Eloquent\Builder|Objekat whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Objekat whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Objekat whereLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Objekat whereNaziv($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Objekat whereOpis($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Objekat whereSlika($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Objekat whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Objekat whereVrstaObjektaId($value)
 * @mixin \Eloquent
 */
class Objekat extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getIdAttribute() {
        return $this->id;
    }

    public function getNazivAttribute() {
        return $this->naziv;
    }

    public function getLogoAttribute() {
        return $this->logo;
    }

    public function getOpisAttribute() {
        return $this->slika;
    }

    public function getVrstaObjekta() {
        return $this->belongsTo(VrstaObjekta::class);
    }

    public function getKuhinje() {
        return $this->belongsToMany(Kuhinja::class, 'kuhinja_objekat', 'objekat_id');
    }

    public function getProizvodi() {
        return $this->hasMany(Proizvod::class);
    }
}
