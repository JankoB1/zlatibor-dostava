<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Kuhinja
 *
 * @property int $id
 * @property string $naziv
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Kuhinja newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Kuhinja newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Kuhinja query()
 * @method static \Illuminate\Database\Eloquent\Builder|Kuhinja whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kuhinja whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kuhinja whereNaziv($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kuhinja whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Kuhinja extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getRestorani() {
        return $this->belongsToMany(Objekat::class, 'kuhinja_objekat', 'kuhinja_id');
    }
}
