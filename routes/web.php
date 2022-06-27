<?php

use App\Http\Controllers\BabController;
use App\Http\Controllers\BidangController;
use App\Http\Controllers\FokusutamaController;
use App\Http\Controllers\InisiatifController;
use App\Http\Controllers\KeyController;
use App\Http\Controllers\Kpi2Controller;
use App\Http\Controllers\KpiController;
use App\Http\Controllers\MarkahController;
use App\Http\Controllers\MilestoneController;
use App\Http\Controllers\NationalController;
use App\Http\Controllers\OutcomeController;
use App\Http\Controllers\PemacuController;
use App\Http\Controllers\PemangkindasarController;
use App\Http\Controllers\PerkarautamaController;
use App\Http\Controllers\SdgController;
use App\Http\Controllers\StrategiController;
use App\Http\Controllers\SubController;
use App\Http\Controllers\ThrustController;
use App\Http\Controllers\TindakanController;
use App\Models\Perkarautama;
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

Route::redirect('/', '/login');


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


require __DIR__.'/auth.php';

Route::group(['middleware' => ['auth']], function() {
    // Route::resource('roles', RoleController::class);
    // Route::resource('users', UserController::class);
    Route::resource('fokusutama', FokusutamaController::class);
    Route::resource('perkarautama', Perkarautama::class);
    Route::get('/perkarautama', [Perkarautama::class, 'perakarautama'])->name('perkarautama');


});

//Fokus Utama
Route::resource('/fokusutama',FokusutamaController::class);

//Perkara Utama
Route::resource('/perkarautama',PerkarautamaController::class);

//Tema

//PemangkinDasar
Route::resource('/pemangkin',PemangkindasarController::class);
// Route::get('/kategori','PemangkindasarController@index')->name('kategori');

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
Route::get('/kpi1/{id}/edit/', [KpiController::class, 'edit1']);
Route::post('/kpi1/{id}', [KpiController::class, 'update1']);
Route::get('/kpi1/index1/', [KpiController::class, 'index1']);
Route::post('/kpi/lulus/{id}', [KpiController::class, 'lulus'])->name('kpi.lulus');
Route::post('/kpi/ditolak/{id}', [KpiController::class, 'ditolak'])->name('kpi.ditolak');



//Strategi
Route::resource('/strategi',StrategiController::class);

//Inisiatif
Route::resource('/inisiatif',InisiatifController::class);

//Tindakan
Route::resource('/tindakan',TindakanController::class);
Route::get('/tindakan1/{id}/edit/', [TindakanController::class, 'edit1']);
Route::post('/tindakan1/{id}', [TindakanController::class, 'update1']);
Route::get('/tindakan1/index1/', [TindakanController::class, 'index1']);

//SDG
Route::resource('/sdg',SdgController::class);

//ThrustInformation
Route::resource('/thrust',ThrustController::class);

//National
Route::resource('/national',NationalController::class);

//Key Activity
Route::resource('/key',KeyController::class);


//Sub Activity
Route::resource('/sub',SubController::class);

//Kpi MPB
Route::resource('/kpi2',Kpi2Controller::class);


//Milestone
Route::resource('/milestone',MilestoneController::class);























