<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\AuditController;
use App\Http\Controllers\BabController;
use App\Http\Controllers\BantuanController;
use App\Http\Controllers\BidangController;
use App\Http\Controllers\ClusterController;
use App\Http\Controllers\FokusutamaController;
use App\Http\Controllers\InisiatifController;
use App\Http\Controllers\InitiativeController;
use App\Http\Controllers\KampungController;
use App\Http\Controllers\KemasukanDataController;
use App\Http\Controllers\KetuaKampungController;
use App\Http\Controllers\KeyController;
use App\Http\Controllers\Kpi2Controller;
use App\Http\Controllers\KpiController;
use App\Http\Controllers\LokalitiController;
use App\Http\Controllers\MilestoneController;
use App\Http\Controllers\NationalController;
use App\Http\Controllers\OutcomeController;
use App\Http\Controllers\PemacuController;
use App\Http\Controllers\PemangkindasarController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\PerkarautamaController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\RolesandpermissionController;
use App\Http\Controllers\SdgController;
use App\Http\Controllers\SenaraiInformasiController;
use App\Http\Controllers\Senarai_kir_dan_airController;
use App\Http\Controllers\StrategiController;
use App\Http\Controllers\StrategyController;
use App\Http\Controllers\SubController;
use App\Http\Controllers\ThrusController;
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

require __DIR__ . '/auth.php';

Route::group(['middleware' => ['auth']], function () {
    // Route::resource('roles', RoleController::class);
    // Route::resource('users', UserController::class);
    Route::resource('/fokusutama', FokusutamaController::class);
    Route::resource('/perkarautama', Perkarautama::class);
    Route::get('/perkarautama', [Perkarautama::class, 'perakarautama'])->name('perkarautama');
});

//MODULE 1 PPD
Route::group(
    ['middleware' => ['role:PPD']],
    function () {

        //Fokus Utama
        Route::resource('/fokusutama', FokusutamaController::class);

        //Perkara Utama
        Route::resource('/perkarautama', PerkarautamaController::class);

        //PemangkinDasar
        Route::resource('/pemangkin', PemangkindasarController::class);
        // Route::get('/kategori','PemangkindasarController@index')->name('kategori');

        //Bab
        Route::resource('/bab', BabController::class);
        //Search
        Route::post('/search_bab', [BabController::class, 'searchBab']);

        //Pemacu
        Route::resource('/pemacu', PemacuController::class);
        //Search
        Route::post('/search_pemacu', [PemacuController::class, 'searchPemacu']);

        //Bidang
        Route::resource('/bidang', BidangController::class);

        //Outcome Nasional
        Route::resource('/outcome', OutcomeController::class);

        //KPI
        Route::resource('/kpi', KpiController::class);
        Route::get('/kpi1/{id}/edit/', [KpiController::class, 'edit1']);
        Route::post('/kpi1/{id}', [KpiController::class, 'update1']);
        Route::get('/kpi1/index1/', [KpiController::class, 'index1']);



        Route::post('/kpi/lulus/{id}', [KpiController::class, 'lulus'])->name('kpi.lulus');
        Route::post('/kpi/ditolak/{id}', [KpiController::class, 'ditolak'])->name('kpi.ditolak');
        //Search
        Route::post('/search_kpi', [KpiController::class, 'searchKpi']);
        Route::post('/search_kpi1', [KpiController::class, 'searchKpi1']);

        //Strategi
        Route::resource('/strategi', StrategiController::class);

        //Inisiatif
        Route::resource('/inisiatif', InisiatifController::class);
        Route::post('/search_inisiatif', [InisiatifController::class, 'searchInisiatif']);

        //Tindakan
        Route::resource('/tindakan', TindakanController::class);
        Route::get('/tindakan1/{id}/edit/', [TindakanController::class, 'edit1']);
        Route::post('/tindakan1/{id}', [TindakanController::class, 'update1']);
        Route::get('/tindakan1/index1/', [TindakanController::class, 'index1']);
        Route::post('/tindakan/lulus/{id}', [TindakanController::class, 'lulus'])->name('tindakan.lulus');
        Route::post('/tindakan/ditolak/{id}', [TindakanController::class, 'ditolak'])->name('tindakan.ditolak');
        Route::post('/search_tindakan', [TindakanController::class, 'searchTindakan']);

        //SDG
        Route::resource('/sdg', SdgController::class);

        //Prestasi Pelaporan

        //KPI
        Route::get('/prestasi/pelaporan_prestasi_kpi/', [KpiController::class, 'index2']);
        Route::get('/prestasi_kpi/{id}/edit/', [KpiController::class, 'edit2']);
        Route::put('/prestasi_kpi/{id}', [KpiController::class, 'update2']);


        //Tindakan
        Route::get('/prestasi/pelaporan_prestasi_tindakan/', [TindakanController::class, 'index2']);
        Route::get('/prestasi/{id}/edit/', [TindakanController::class, 'edit2']);
        Route::put('/prestasi/{id}', [TindakanController::class, 'update2']);
    }
);

Route::group(
    ['middleware' => ['role:MPB']],
    function () {

        //MODULE 2 MPB
        Route::view('/mpb', 'mpb');

        //ThrustInformation
        Route::resource('/thrust', ThrustController::class);

        //National
        Route::resource('/national', NationalController::class);

        //Key Activity
        Route::resource('/key', KeyController::class);

        //Sub Activity
        Route::resource('/sub', SubController::class);

        //Kpi MPB
        Route::resource('/kpi2', Kpi2Controller::class);

        //Milestone
        Route::resource('/milestone', MilestoneController::class);

        Route::get('/displayThrust', [MilestoneController::class, 'index1']);
        Route::get('/displayThrust1', [MilestoneController::class, 'index2']);


        // Route::view('/displayThrust', 'displayThrust');
        // Route::view('/displayThrust1', 'displayThrust1');
    }
);

Route::group(
    ['middleware' => ['role:KT']],
    function () {
        // Module 3 KT

        //Lokaliti
        Route::get('/lokaliti1/index1/', [LokalitiController::class, 'index1']);
        Route::get('/lokaliti/index/', [LokalitiController::class, 'index']);

        // Senarai Kir & Air
        Route::resource('/senarai_kir_air', Senarai_kir_dan_airController::class);
        Route::get('/senarai_kir_air1/index1/', [Senarai_kir_dan_airController::class, 'index1']);
        Route::get('/senarai_kir_air1/index2/', [Senarai_kir_dan_airController::class, 'index2']);
        // Route::get('/senarai_kir_air1/list', [Senarai_kir_dan_airController::class, 'getSenarai'])->name('senarai_kir_air1.list');
        Route::get('senarai_kir_air1', [Senarai_kir_dan_airController::class, 'senarai'])->name('senarai_kir_air1.senarai');

        // Jenis Bantuan
        Route::resource('/bantuan', BantuanController::class);
        Route::get('/bantuan1/berdasarkan_negeri/', [BantuanController::class, 'berdasarkan_negeri']);
        Route::get('/bantuan1/senarai_ketua_kampung/', [BantuanController::class, 'senarai_ketua_kampung']);
        Route::get('/bantuan1/senarai_kampung_menerima/', [BantuanController::class, 'senarai_kampung_menerima']);

        //Ketua Kampung
        Route::resource('/ketuaKampung', KetuaKampungController::class);

        //Kampung
        Route::resource('kampung', KampungController::class);

        // Senarai Informasi
        Route::resource('/senarai_informasi', SenaraiInformasiController::class);
        Route::get('/senarai_informasi1/index1/', [SenaraiInformasiController::class, 'index1']);

        Route::post('senarai-kir-dan-air-excel', [KemasukanDataController::class, 'import']);

        // Kemasukan Data
        // Route::resource('/kemasukanData', KemasukanDataController::class);

        Route::get('/kemasukanData/index', [KemasukanDataController::class, 'index']);
        Route::get('/kemasukanData/{id}/edit/', [KemasukanDataController::class, 'edit']);
        Route::put('/kemasukanData/{id}', [KemasukanDataController::class, 'update']);
        Route::delete('/kemasukanData/{id}', [KemasukanDataController::class, 'destroy']);


        Route::get('/kemasukanData/bahagian', [KemasukanDataController::class, 'bahagian']);

        Route::post('/kemasukanData-bahagian1', [KemasukanDataController::class, 'simpanBahagian1']);
        Route::post('/kemasukanData-bahagian2', [KemasukanDataController::class, 'simpanBahagian2']);
        Route::post('/kemasukanData-bahagian3', [KemasukanDataController::class, 'simpanBahagian3']);
        Route::post('/kemasukanData-bahagian4', [KemasukanDataController::class, 'simpanBahagian4']);
        Route::post('/kemasukanData-bahagian5', [KemasukanDataController::class, 'simpanBahagian5']);

        Route::get('/kemasukanData/bahagian-excel', [KemasukanDataController::class, 'bahagian6']);
    }
);

Route::group(
    ['middleware' => ['role:MD']],
    function () {
        // Module 4 MD

        //Thrust
        Route::resource('/thrus', ThrusController::class);

        //Strategy
        Route::resource('/strategy', StrategyController::class);

        //Cluster
        Route::resource('/cluster', ClusterController::class);

        //Initiative
        Route::resource('/initiative', InitiativeController::class);

        //Program
        Route::resource('/program', ProgramController::class);

        //Plan
        Route::resource('/plan', PlanController::class);

        //Activity
        Route::resource('/activity', ActivityController::class);
        Route::post('/search_activity', [ActivityController::class, 'searchActivity']);
        Route::post('/search_activity1', [ActivityController::class, 'searchActivity1']);
        Route::get('/approval/cluster/', [ActivityController::class, 'cluster']);
        Route::get('/display/cluster1/', [ActivityController::class, 'cluster1']);
        Route::get('/display1/cluster2/', [ActivityController::class, 'cluster2']);
        Route::post('/activity/lulus/{id}', [ActivityController::class, 'lulus'])->name('activity.lulus');
        Route::post('/activity/ditolak/{id}', [ActivityController::class, 'ditolak'])->name('activity.ditolak');
    }
);

Route::group(
    ['middleware' => ['role:ED']],
    function () {

        // Module 5 ED

        //User Management
        Route::resource('/userRole', RolesandpermissionController::class);
        Route::resource('/user', PenggunaController::class);
        Route::get('users', [PenggunaController::class, 'index1'])->name('users.index1');


        Route::get('/user1/index1/', [PenggunaController::class, 'index1']);
        Route::get('/user1/create1/', [PenggunaController::class, 'create1']);
        Route::post('/set-semula-kata-laluan/{id}', [PenggunaController::class, 'set_semula_kata_laluan']);
        Route::get('/carian-pengguna', [PenggunaController::class, 'result_search']);

        Route::post('importUserExcel', [PenggunaController::class, 'import']);

        //Audit Log
        // Route::get('/audit', AuditController::class);
        Route::get('/audit', [AuditController::class, 'index']);
    }
);

Route::post('/importUserExcel', [PenggunaController::class, 'import']);
Route::post('/senarai-kir-dan-air-excel', [KemasukanDataController::class, 'import']);

Route::post('/find-by-lokaliti', [KetuaKampungController::class, 'find']);

Route::view('/ucapan', 'ucapan');
Route::view('/rumusanPPD', 'rumusanPPD');
Route::view('/rumusanTindakan', 'rumusanTindakan');
Route::view('/executive', 'executive');
Route::view('/executiveSummary', 'executiveSummary');
