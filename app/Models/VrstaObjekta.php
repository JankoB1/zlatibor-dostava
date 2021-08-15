<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\VrstaObjekta
 *
 * @property int $id
 * @property string $naziv
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Objekat[] $objekti
 * @property-read int|null $objekti_count
 * @method static \Illuminate\Database\Eloquent\Builder|VrstaObjekta newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|VrstaObjekta newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|VrstaObjekta query()
 * @method static \Illuminate\Database\Eloquent\Builder|VrstaObjekta whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VrstaObjekta whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VrstaObjekta whereNaziv($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VrstaObjekta whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class VrstaObjekta extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getNazivAttribute() {
        return $this->naziv;
    }

    public function getObjekti() {
        return $this->hasMany(Objekat::class, 'vrsta_objekta_id');
    }
}
