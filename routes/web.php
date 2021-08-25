<?php

use App\Http\Controllers\KorpaController;
use App\Http\Controllers\KuhinjaController;
use App\Http\Controllers\ObjekatController;
use App\Http\Controllers\ProizvodController;
use App\Models\Kuhinja;
use App\Models\Objekat;
use App\Models\VrstaObjekta;
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

Route::get('/', [ObjekatController::class, 'index'])->name('pocetna');
Route::get('/objekat/{slug}', [ObjekatController::class, 'show'])->name('objekat');
Route::get('/kuhnje', [KuhinjaController::class, 'index'])->name('kuhinje');
Route::get('/restorani/{slug}', [KuhinjaController::class, 'show'])->name('restorani.kuhinja');

// Korpa
Route::post('/dodaj-u-korpu', [ProizvodController::class, 'dodajUKorpu'])->name('dodajukorpu');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function() {

});
