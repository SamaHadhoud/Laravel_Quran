<?php

namespace App\Models;

use App\Models\Surah;
use App\Models\juz_surah;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Juz extends Model
{
    use HasFactory;
    public function surahs()
    {
        return $this->belongsToMany(Surah::class,'juz_surah', 'juz_id', 'surah_id');
    }
    public function ar_aya()
    {
        return $this->hasMany(Ar_ayat::class);
    }
    public function en_ayats()
    {
        return $this->belongsToMany(Surah::class,'ar_ayats', 'juz_id', 'surah_id');
}
}
