<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $old_user = DB::connection('mysql2')->table('surah')->get();

        foreach ($old_user as $user) {
         DB::connection('mysql')->table('surahs')->insert([
         'name' => $user->name,
         'translatedName' => $user->translatedName,
         'ayahs' => $user->ayahs,
         'id'   => $user->id,
         'Ar'   => $user->Ar

     ]);
    }

     $old_user = DB::connection('mysql2')->table('quran_ayat')->get();

        foreach ($old_user as $user) {
         DB::connection('mysql')->table('ar_ayats')->insert([

         'surah_id' => $user->sura,
         'aya' => $user->aya,
         'text' => $user->text,
         'id'   => $user->id,
         'simple'   => $user->simple,
         'juz_id'   => $user->juz,
         'hezb'   => $user->hezb,
         'page_id'   => $user->page,
         'rub'   => $user->rub,
         'verse_key'   => $user->verse_key,



     ]);

}


        $old_user = DB::connection('mysql2')->table('en_sahih')->get();

        foreach ($old_user as $user) {
        DB::connection('mysql')->table('en_ayats')->insert([
        'surah_id' => $user->sura,
        'aya' => $user->aya,
        'text' => $user->text,
        'id'   => $user->id,
        'ar_ayat_id'   => $user->id

        ]);
        }



        $old_user = DB::connection('mysql2')->table('juz')->get();

        foreach ($old_user as $user) {
        DB::connection('mysql')->table('juzs')->insert([
        'Ar' => $user->Ar,
        'id'   => $user->id,
        'En' => $user->En
        ]);
        }

        $old_user = DB::connection('mysql2')->table('juz-surah')->get();

        foreach ($old_user as $user) {
        DB::connection('mysql')->table('juz_surah')->insert([
        'surah_id' => $user->id,
        'juz_id'   => $user->juz

        ]);
        }

        for ($x = 1; $x <= 604; $x++) {
            DB::connection('mysql')->table('pages')->insert([
                'id' => $x
            ]);
          }
    }
}
