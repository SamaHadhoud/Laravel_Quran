<?php

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
        Schema::create('en_ayats', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('surah_id');
            $table->integer('aya');
            $table->longText('text');
            $table->foreignId('ar_ayat_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('en_ayats');
    }
};
