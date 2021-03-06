<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Varijacija extends Model
{
    use HasFactory;

    public function getProizvodi() {
        return $this->belongsToMany(Proizvod::class, 'proizvod_varijacija', 'varijacija_id');
    }

    public function getVrstaVarijacije() {
        return $this->belongsTo(VrstaVarijacije::class);
    }

    public function dohvatiCenuVarijacije($proizvodId) {
        return DB::table('proizvod_varijacija')
            ->where('proizvod_id', '=', $proizvodId)
            ->where('varijacija_id', '=', $this->id)
            ->first()
            ->cena;
    }

    public static function dohvatiSveVarijacije() {
        return Varijacija::all();
    }
}
