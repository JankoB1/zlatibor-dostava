<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prilog extends Model
{
    use HasFactory;

    public function getProizvodi() {
        return $this->belongsToMany(Proizvod::class, 'proizvod_prilog', 'prilog_id');
    }
}
