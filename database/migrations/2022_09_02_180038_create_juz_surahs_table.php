<?php

use App\Models\Surah;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('juz_surah', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('surah_id')->constrained();
            $table->foreignId('juz_id')->constrained();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('juz_surahs');
    }
};
