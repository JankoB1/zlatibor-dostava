<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

    public function getIdAttribute() {
        return $this->id;
    }

    public function getNazivAttribute() {
        return $this->naziv;
    }

//    public function getSlugAttribute() {
//        return $this->slug;
//    }

    public function getCenaAttribute() {
        return $this->cena;
    }

    public function getOpisAttribute() {
        return $this->opis;
    }

    public function getObjekat() {
        return $this->belongsTo(Objekat::class);
    }
}
