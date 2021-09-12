<?php

use App\Http\Controllers\KorpaController;
use App\Http\Controllers\KuhinjaController;
use App\Http\Controllers\ObjekatController;
use App\Http\Controllers\PorudzbinaController;
use App\Http\Controllers\ProizvodController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// Pocetna i objekti
Route::get('/', [ObjekatController::class, 'index'])->name('pocetna');
Route::get('/objekat/{slug}', [ObjekatController::class, 'show'])->name('objekat');
Route::get('/kuhnje', [KuhinjaController::class, 'index'])->name('kuhinje');
Route::get('/restorani/{slug}', [KuhinjaController::class, 'show'])->name('restorani.kuhinja');
Route::get('/search/', [ObjekatController::class, 'search'])->name('search');

// Korpa
Route::post('/dodaj-u-korpu', [ProizvodController::class, 'dodajProizvodUKorpu'])->name('dodajukorpu');
Route::post('/smanji-za-1/{naziv}', [ProizvodController::class, 'smanjiZaJedan'])->name('korpa.smanjizajedan');
Route::get('/korpa', [ProizvodController::class, 'prikaziKorpu'])->name('korpa');
Route::get('/ukloni/{naziv}', [ProizvodController::class, 'ukloniProizvod'])->name('korpa.ukloni');

// Porudzbina
Route::get('/uspesna-porudzbina', [ProizvodController::class, 'prikaziPorudzbinu'])->name('porudzbina.uspesna');
Route::get('/posalji-porudzbinu/{user}', [PorudzbinaController::class, 'posaljiPorudzbinu'])->name('porudzbina.posalji');
Route::get('/vrati-na-pocetnu', [ProizvodController::class, 'resetujKorpu'])->name('korpa.resetuj');


Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function() {
});
