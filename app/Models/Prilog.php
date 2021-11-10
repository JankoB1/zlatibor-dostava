<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Prilog extends Model
{
    use HasFactory;

    public function getProizvodi() {
        return $this->belongsToMany(Proizvod::class, 'proizvod_prilog', 'prilog_id');
    }

    public function dohvatiCenuPriloga($proizvod_id) {
        return DB::table('proizvod_prilog')
            ->where('proizvod_id', '=', $proizvod_id)
            ->where('prilog_id', '=', $this->id)
            ->first()
            ->cena;
    }

    public static function dohvatiSvePriloge() {
        return Prilog::all();
    }
}
