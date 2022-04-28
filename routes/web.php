<?php

use App\Http\Controllers\BabController;
use App\Http\Controllers\BidangController;
use App\Http\Controllers\FokusutamaController;
use App\Http\Controllers\InisiatifController;
use App\Http\Controllers\KpiController;
use App\Http\Controllers\MarkahController;
use App\Http\Controllers\OutcomeController;
use App\Http\Controllers\PemacuController;
use App\Http\Controllers\PemangkindasarController;
use App\Http\Controllers\PerkarautamaController;
use App\Http\Controllers\SdgController;
use App\Http\Controllers\StrategiController;
use App\Http\Controllers\TindakanController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

//Fokus Utama
Route::resource('/fokusutama',FokusutamaController::class);

//Perkara Utama
Route::resource('/perkarautama',PerkarautamaController::class);

//Tema

//PemangkinDasar
Route::resource('/pemangkin',PemangkindasarController::class);
Route::get('/kategori','PemangkindasarController@index')->name('kategori');

//Bab
Route::resource('/bab',BabController::class);

//Pemacu
Route::resource('/pemacu',PemacuController::class);

//Bidang
Route::resource('/bidang',BidangController::class);

//Outcome Nasional
Route::resource('/outcome',OutcomeController::class);

//KPI
Route::resource('/kpi',KpiController::class);

//Strategi
Route::resource('/strategi',StrategiController::class);

//Inisiatif
Route::resource('/inisiatif',InisiatifController::class);

//Tindakan
Route::resource('/tindakan',TindakanController::class);

//SDG
Route::resource('/sdg',SdgController::class);

//Markah
Route::resource('/markah',MarkahController::class);
Route::get('/markah/lulus/{id}', [MarkahController::class, 'lulus'])->name('markah.lulus');
Route::get('/markah/ditolak/{id}', [MarkahController::class, 'ditolak'])->name('markah.ditolak');













