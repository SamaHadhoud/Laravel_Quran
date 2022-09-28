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
        Schema::create('ar_ayats', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('surah_id');
            $table->integer('aya');
            $table->longText('text');
            $table->longText('simple');
            $table->foreignId('juz_id');
            $table->integer('hezb');
            $table->foreignId('page_id');
            $table->integer('rub');
            $table->string('verse_key');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ar_ayats');
    }
};
