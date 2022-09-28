<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class En_ayat extends Model
{
    use HasFactory;
    public function surah()
    {
        return $this->belongsTo(Surah::class, 'surah_id');
    }
}
