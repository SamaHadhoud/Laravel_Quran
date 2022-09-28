<?php
use App\Models\page;
use App\Models\Juz;
use App\Models\Surah;
use App\Models\Ar_ayat;
use App\Models\En_ayat;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $surahs = Surah::all();
    $juzs = Juz::with('surahs')->get();
    return view('main',compact('surahs', 'juzs'));

});
Route::get('/search', [SearchController::class, 'search'])->name('search');

Route::get('/{id}', function($id){
    $surah = Surah::with('ar_ayats.en_ayats')->find($id);

    return view('open',compact('surah'));

});

Route::get('/juz/{id}', function($id){
    $juz = Juz::with('surahs.ar_ayats.en_ayats')->find($id);

    return view('open_juz',compact('juz'));
    });
Route::get('/page/{id}', function($id){
        $page = Page::with('ar_ayats.surah','ar_ayats.en_ayats')->find($id);

        return view('open_page',compact('page'));
});
Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);


