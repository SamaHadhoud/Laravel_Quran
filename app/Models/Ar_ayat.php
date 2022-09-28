<?php

namespace App\Models;

use App\Models\Surah;
use App\Models\En_ayat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ar_ayat extends Model
{
    use HasFactory;
    public function en_ayats()
    {
        return $this->hasMany(En_ayat::class,'ar_ayat_id');
    }
    public function surah()
    {
        return $this->belongsTo(Surah::class);
    }
}
