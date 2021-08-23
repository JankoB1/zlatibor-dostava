<?php

use App\Http\Controllers\KuhinjaController;
use App\Http\Controllers\ObjekatController;
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
Route::get('/restorani', [KuhinjaController::class, 'index'])->name('restorani');
Route::get('/restorani/{slug}', [KuhinjaController::class, 'show'])->name('restorani.kuhinja');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function() {

});
