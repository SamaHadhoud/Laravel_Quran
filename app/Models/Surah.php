<?php

namespace App\Models;

use App\Models\Juz;
use App\Models\Ar_ayat;
use App\Models\En_ayat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Surah extends Model
{
    use HasFactory;
    public function juz()
    {
        return $this->belongsToMany(Juz::class, 'juz_surah', 'surah_id', 'juz_id');
    }
    public function ar_ayats()
    {
        return $this->hasMany(Ar_ayat::class);
    }
    public function en_ayats()
    {
        return $this->hasMany(En_ayat::class);
    }
}
