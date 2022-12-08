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
use App\Http\Controllers\MPBController;
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
use App\Http\Controllers\SectoralController;
use App\Http\Controllers\SenaraiInformasiController;
use App\Http\Controllers\Senarai_kir_dan_airController;
use App\Http\Controllers\StrategiController;
use App\Http\Controllers\StrategyController;
use App\Http\Controllers\SubController;
use App\Http\Controllers\ThrusController;
use App\Http\Controllers\ThrustController;
use App\Http\Controllers\TindakanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SendEmailController;
use App\Models\Rolesandpermission;

use App\Http\Controllers\TableauController;
use App\Http\Controllers\IntegrasiController;

Route::redirect('/', '/login');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';


//MODULE 1 PPD
Route::group(
    [
        'middleware' => ['role:PPD'],
        'prefix' => 'PPD',
    ],
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
        Route::get('/kpi_cetak/{id}', [KpiController::class, 'print_kpi']);


        Route::post('/kpi/lulus/{id}', [KpiController::class, 'lulus'])->name('kpi.lulus');
        Route::post('/kpi/ditolak/{id}', [KpiController::class, 'ditolak'])->name('kpi.ditolak');
        //Search
        Route::post('/search_kpi', [KpiController::class, 'searchKpi']);
        Route::post('/search_kpi1', [KpiController::class, 'searchKpi1']);

        //Prestasi Pelaporan

        //KPI
        Route::get('/prestasi/pelaporan_prestasi_kpi/', [KpiController::class, 'index2']);
        Route::get('/prestasi_kpi/{id}/edit/', [KpiController::class, 'edit2']);
        Route::put('/prestasi_kpi/{id}', [KpiController::class, 'update2']);


        //Tindakan
        Route::get('/prestasi/pelaporan_prestasi_tindakan/', [TindakanController::class, 'index2']);
        Route::get('/prestasi/{id}/edit/', [TindakanController::class, 'edit2']);
        Route::put('/prestasi/{id}', [TindakanController::class, 'update2']);
        Route::get('/tindakan_cetak/{id}', [TindakanController::class, 'print_tindakan']);



        //Penilaian KPI

        Route::get('/paparan/kpi/', [KpiController::class, 'paparan']);
        Route::get('/penilaian/kpi/', [KpiController::class, 'penilaian']);
        Route::get('/penilaian/kpi/result', [KpiController::class, 'result_penilaian']);


        Route::get('/kpi/{id}/penilaian/', [KpiController::class, 'edit3']);
        Route::put('/penilaian/{id}', [KpiController::class, 'update3']);

        Route::get('/kpi/{id}/paparan/', [KpiController::class, 'edit4']);
        Route::put('/paparan/{id}', [KpiController::class, 'update4']);




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
    }
);

Route::group(
    [
        'middleware' => ['role:MPB'],
        'prefix' => 'MPB',
    ],
    function () {

        //MODULE 2 MPB
        Route::view('/dashboardMPB', 'dashboardMPB');

        //ThrustInformation
        Route::resource('/thrust', ThrustController::class);
        Route::get('/mpb/{id}/edit', [MPBController::class, 'edit']);
        Route::get('/mpb_view', [MPBController::class, 'index']);
        Route::post('thrust/{id}', [MPBController::class, 'thrust']);




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
        Route::post('/milestone/lulus/{id}', [MilestoneController::class, 'lulus'])->name('milestone.lulus');
        Route::post('/milestone/ditolak/{id}', [MilestoneController::class, 'ditolak'])->name('milestone.ditolak');

        Route::get('/displayThrust', [MilestoneController::class, 'index1']);
        Route::get('/displayThrust1', [MilestoneController::class, 'index2']);


        // Route::view('/displayThrust', 'displayThrust');
        // Route::view('/displayThrust1', 'displayThrust1');
    }
);

Route::group(
    [
        'middleware' => ['role:KT'],
        'prefix' => 'KT',
    ],
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

        Route::post('/search_senarai', [Senarai_kir_dan_airController::class, 'searchSenarai']);


        // Jenis Bantuan
        Route::resource('/bantuan', BantuanController::class);
        Route::get('/bantuan1/berdasarkan_negeri/', [BantuanController::class, 'berdasarkan_negeri']);
        Route::get('/bantuan1/senarai_ketua_kampung/', [BantuanController::class, 'senarai_ketua_kampung']);
        Route::get('/bantuan1/senarai_kampung_menerima/', [BantuanController::class, 'senarai_kampung_menerima']);

        Route::get('/bantuan_cetak/{id}', [BantuanController::class, 'print_bantuan']);

        Route::get('/bantuan_negeri_cetak/{id}', [BantuanController::class, 'print_bantuan_negeri']);


        //Ketua Kampung
        Route::resource('/ketuaKampung', KetuaKampungController::class);

        //Kampung
        Route::resource('/kampung', KampungController::class);

        // Senarai Informasi
        Route::resource('/senarai_informasi', SenaraiInformasiController::class);
        Route::get('/senarai_informasi1/index1/', [SenaraiInformasiController::class, 'index1']);

        Route::post('senarai-kir-dan-air-excel', [KemasukanDataController::class, 'import']);

        // Kemasukan Data
        // Route::resource('/kemasukanData', KemasukanDataController::class);

        Route::get('/kemasukanData/index', [KemasukanDataController::class, 'index']);
        Route::get('/kemasukanData/{id}/edit/', [KemasukanDataController::class, 'edit']);
        Route::get('/kemasukanData/{id}/bahagian_2/', [KemasukanDataController::class, 'edit1']);
        Route::get('/kemasukanData/{id}/bahagian_3/', [KemasukanDataController::class, 'edit2']);
        Route::get('/kemasukanData/{id}/bahagian_4/', [KemasukanDataController::class, 'edit3']);
        Route::get('/kemasukanData/{id}/bahagian_5/', [KemasukanDataController::class, 'edit4']);



        Route::put('/kemasukanData/{id}', [KemasukanDataController::class, 'update']);
        Route::put('/kemasukanData/{id}', [KemasukanDataController::class, 'update1']);
        Route::put('/kemasukanData/{id}', [KemasukanDataController::class, 'update2']);
        Route::put('/kemasukanData/{id}', [KemasukanDataController::class, 'update3']);
        Route::put('/kemasukanData/{id}', [KemasukanDataController::class, 'update4']);



        Route::delete('/kemasukanData/{id}', [KemasukanDataController::class, 'destroy']);


        Route::get('/kemasukanData/bahagian', [KemasukanDataController::class, 'bahagian']);

        Route::post('/kemasukanData-bahagian1', [KemasukanDataController::class, 'simpanBahagian1']);
        Route::post('/kemasukanData-bahagian2', [KemasukanDataController::class, 'simpanBahagian2']);
        Route::post('/kemasukanData-bahagian3', [KemasukanDataController::class, 'simpanBahagian3']);
        Route::post('/kemasukanData-bahagian4', [KemasukanDataController::class, 'simpanBahagian4']);
        Route::post('/kemasukanData-bahagian5', [KemasukanDataController::class, 'simpanBahagian5']);

        Route::get('/kemasukanData/bahagian-excel', [KemasukanDataController::class, 'bahagian6']);

        //Senarai Indikator
        Route::get('/maklumat/indikator', [KemasukanDataController::class, 'index1']);
        Route::get('/maklumat/{id}/pendapatan', [KemasukanDataController::class, 'index2']);
        Route::get('/maklumat/kategori', [KemasukanDataController::class, 'index3']);

        Route::post('/kemasukanData-indikator', [KemasukanDataController::class, 'simpanIndikator']);
        Route::post('/kemasukanData-pendapatan', [KemasukanDataController::class, 'simpanPendapatan']);
        Route::post('/kemasukanData-kategori', [KemasukanDataController::class, 'simpanKategori']);


        Route::get('integrasi', [IntegrasiController::class, 'page']);
        Route::post('integrasi', [IntegrasiController::class, 'call_api']);
    }
);

Route::group(
    [
        'middleware' => ['role:MD'],
        'prefix' => 'MD',
    ],
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
        Route::get('/initiative/{id}/update/', [InitiativeController::class, 'edit1']);
        Route::put('/update/{id}', [InitiativeController::class, 'update1']);


        Route::post('/search_initiative', [InitiativeController::class, 'searchInitiative']);



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

        Route::get('/activity/{id}/progress/', [ActivityController::class, 'progress_update']);
        Route::post('/activity/{id}', [ActivityController::class, 'update_progress']);



        //Sectoral
        Route::resource('/sectoral', SectoralController::class);

        //User
        Route::get('/user/list/', [PenggunaController::class, 'index_mydigital']);
        Route::get('/user/create/', [PenggunaController::class, 'create_mydigital']);
    }
);

Route::group(
    [
        'middleware' => ['role:ED'],
        'prefix' => 'ED',
    ],
    function () {

        // Module 5 ED

        //User Management
        Route::resource('/userRole', RolesandpermissionController::class);
        Route::get('/bahagian/senarai/', [RolesandpermissionController::class, 'index1']);
        Route::get('/bahagian/create/', [RolesandpermissionController::class, 'create1']);
        Route::post('/bahagian', [RolesandpermissionController::class, 'simpan']);


        Route::get('/bahagian/{id}/edit', [RolesandpermissionController::class, 'edit1']);
        Route::post('/bahagian/{id}', [RolesandpermissionController::class, 'update_permission']);
        Route::delete('/bahagian/{id}', [RolesandpermissionController::class, 'destroy_permission']);



        Route::resource('/user', PenggunaController::class);
        Route::get('users', [PenggunaController::class, 'index1'])->name('users.index1');


        Route::get('/user1/index1/', [PenggunaController::class, 'index1']);
        Route::get('/user1/create1/', [PenggunaController::class, 'create1']);
        Route::get('user/{id}/active', [PenggunaController::class, 'active']);

        Route::get('/userFetchList', [PenggunaController::class, 'userFetchList']);
        Route::get('/active_deactive_user/{id}', [PenggunaController::class, 'active_deactive_user']);

        Route::post('importUserExcel', [PenggunaController::class, 'import']);

        //Audit Log
        // Route::get('/audit', AuditController::class);
        Route::get('/audit', [AuditController::class, 'index']);
    }
);

Route::get('/userFetchList', [PenggunaController::class, 'userFetchList']);
Route::get('/active_deactive_user/{id}', [PenggunaController::class, 'active_deactive_user']);




Route::post('/importUserExcel', [PenggunaController::class, 'import']);
Route::post('/senarai-kir-dan-air-excel', [KemasukanDataController::class, 'import']);

Route::post('/find-by-lokaliti', [KetuaKampungController::class, 'find']);
Route::post('/find-by-lokaliti', [Senarai_kir_dan_airController::class, 'find']);


Route::view('/PPD/dashboard', 'tableau/ppd/ucapan');
Route::view('/PPD/ringkasan_ppd', 'tableau/ppd/rumusanPPD');
Route::view('/PPD/rumusanTindakan', 'tableau/ppd/rumusanTindakan');
Route::view('/PPD/ringkasan_eksekutif', 'tableau/ppd/executive');
Route::view('/PPD/dashboard_eksekutif', 'tableau/ppd/executiveSummary');
Route::view('/PPD/prestasi_kpi', 'tableau/ppd/prestasi_kpi');

Route::view('/MPB/dashboard', 'tableau/mpb/dashboard');
Route::view('/MPB/overall_mpb_summary', 'tableau/mpb/overall');
Route::view('/MPB/performance', 'tableau/mpb/performance');

Route::view('/MD/Tableau/main_page', 'tableau/md/dashboard1');
Route::view('/MD/Tableau/cluster_level', 'tableau/md/dashboard2');
Route::view('/MD/Tableau/initiative_level', 'tableau/md/dashboard3');
Route::view('/MD/Tableau/sectoral_level', 'tableau/md/dashboard4');


Route::view('/KT/Tableau/kir_dan_air_mengikut_jantina', 'tableau/kt/dashboard1');
Route::view('/KT/Tableau/informasi_kir_air', 'tableau/kt/dashboard2');
Route::view('/KT/Tableau/maklumat_indikator_jadual', 'tableau/kt/dashboard3');



// Route::get('/sendemail', 'SendEmailController@index');
// Route::post('/sendemail/send', 'SendEmailController@send');

Route::get('sendemail', [SendEmailController::class, 'index']);
Route::post('/sendemail/send', [SendEmailController::class, 'send']);


Route::get('md/tableau-dashboard-data-01', [TableauController::class, 'md_dashboard_01']);
Route::get('md/tableau-dashboard-data-02', [TableauController::class, 'md_dashboard_02']);
Route::get('md/tableau-dashboard-data-03', [TableauController::class, 'md_dashboard_03']);
Route::get('md/tableau-dashboard-data-04', [TableauController::class, 'md_dashboard_04']);
