<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VrstaVarijacije extends Model
{
    use HasFactory;

    public function getProizvodi() {
        return $this->belongsToMany(Proizvod::class, 'proizvod_vv', 'vrsta_varijacije_id');
    }

    public function getVarijacije() {
        return $this->hasMany(Varijacija::class, 'vrsta_varijacije_id');
    }
}
