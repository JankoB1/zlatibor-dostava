<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KuhinjaProizvoda extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getRestorani() {
        return $this->belongsToMany(Objekat::class, 'kuhinja_proizvod_objekat', 'kuhinja_proizvoda_id');
    }
}
