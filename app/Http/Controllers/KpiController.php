<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKpiRequest;
use App\Http\Requests\UpdateKpiRequest;
use App\Mail\SendMail;
use App\Models\Bab;
use App\Models\Bidang;
use App\Models\Fokusutama;
use App\Models\Kpi;
use App\Models\KpiMarkah;
use App\Models\Outcome;
use App\Models\Pemangkindasar;
use App\Models\Perkarautama;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class KpiController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $kpis = Kpi::all();
        $list = Outcome::all();

        //Filter
        $fokusUtama = Fokusutama::all();
        $perkaraUtama = Perkarautama::all();
        $temaPemangkin = Pemangkindasar::all();
        $bab = Bab::all();
        $bidang = Bidang::all();


        return view('ppd.kpi.index', compact('kpis', 'list', 'fokusUtama', 'perkaraUtama', 'temaPemangkin', 'bab', 'bidang'));
    }

    public function index1(Request $request)
    {
        $tema = Pemangkindasar::all();
        $bab = Bab::all();
        $bidang = Bidang::all();


        if ($request->user()->can('BPKP')) {

            $kpis = Kpi::all();
        } else {

            $user_id = $request->user()->id;

            $kpis = Kpi::where('user_id', '=', $user_id)->get();
        }

        //graph 1
        $overall_1 = Kpi::all()->count();

        $lulus = Kpi::where([
            ['lulus', '=', '1']
        ])->count();
        $ditolak = Kpi::where([
            ['ditolak', '=', '1']
        ])->count();

        $semakan = Kpi::where([
            ['lulus', '=', null], ['ditolak', '=', null]
        ])->count();

        $tiada_tindakan = Kpi::where([
            ['ditolak', '=', 'null']
        ])->count();

        // if ($overall_1 == 0){

        // }
        $percent = $lulus / $overall_1 * 100;

        //graph 2


        //graph 3
        $overall_2 = Bab::all()->count();
        $jumlah_bab = Bab::all()->count();

        $bil_bab = $jumlah_bab / $overall_2 * 100;





        return view('ppd.kpi.index1', compact(
            'kpis',
            'tema',
            'bab',
            'bidang',
            'lulus',
            'ditolak',
            'semakan',
            'tiada_tindakan',
            'bil_bab',
            'percent'
        ));
    }

    public function index2(Request $request)
    {

        $kpis = Kpi::all();
        $outcomes = Outcome::all();

        //Filter
        $fokusUtama = Fokusutama::all();
        $perkaraUtama = Perkarautama::all();
        $temaPemangkin = Pemangkindasar::all();
        $bab = Bab::all();
        $bidang = Bidang::all();

        return view('ppd.kpi.index2', compact('kpis', 'fokusUtama', 'perkaraUtama', 'temaPemangkin', 'bab', 'bidang', 'outcomes'));
    }

    public function penilaian()
    {
        $kpis = Kpi::all();

        $markah = KpiMarkah::all();

        $tema = Pemangkindasar::first()->kpi_id;
        $bab = Bab::all();
        $bidang = Bidang::all();
        $outcome = Outcome::all();

        return view('ppd.kpi.penilaian', compact('kpis', 'tema', 'bab', 'bidang', 'outcome', 'markah'));
    }

    public function paparan()
    {
        $kpis = Kpi::all();

        $tema = Pemangkindasar::all();
        $bab = Bab::all();
        $bidang = Bidang::all();
        $outcome = Outcome::all();

        return view('ppd.kpi.paparan', compact('kpis', 'tema', 'bab', 'bidang', 'outcome'));
    }


    public function create()
    {
        $user = Auth::user();

        $list = Outcome::all();
        $listBidang = Bidang::all();
        $listBab = Bab::all();
        $listTema = Pemangkindasar::all();

        $fokuss = Fokusutama::all();
        $perkaras = Perkarautama::all();

        return view('ppd.kpi.create', compact('user', 'list', 'listBidang', 'listBab', 'listTema', 'fokuss', 'perkaras'));
    }


    public function store(StoreKpiRequest $request)
    {

        $kpi = Kpi::create($request->validated());

        return redirect()->route('kpi.index');
    }



    public function lulus($id)
    {

        $kpi = Kpi::find($id);
        $data  = User::find($kpi->user_id);

        $kpi->lulus = true;
        $kpi->ditolak = false;
        $kpi->save();

        Mail::to($data->email)->send(new SendMail($data, $kpi));

        return redirect()->to('PPD/kpi1/index1');
    }

    public function ditolak(Request $request)
    {
        $kpi = Kpi::find($request->id);
        $data  = User::find($kpi->user_id);

        $kpi->lulus = false;
        $kpi->ditolak = true;
        $kpi->save();

        Mail::to($data->email)->send(new SendMail($data, $kpi));


        return redirect()->to('PPD/kpi1/index1');
    }

    public function show(Kpi $kpi)
    {
        return view('ppd.kpi.show', compact('kpi'));
    }


    public function edit(Kpi $kpi)
    {
        // $kpi = Kpi::find($kpi);
        $list = Outcome::all();
        $listBidang = Bidang::all();
        $listBab = Bab::all();
        $listTema = Pemangkindasar::all();

        $fokuss = Fokusutama::all();
        $perkaras = Perkarautama::all();

        return view('ppd.kpi.edit', compact('kpi', 'list', 'listBidang', 'listBab', 'listTema', 'fokuss', 'perkaras'));
    }

    public function edit1($id_kpi)
    {
        $kpi = Kpi::find($id_kpi);

        return view('ppd.kpi.edit1', compact('kpi'));
    }

    public function edit2($id_kpi)
    {
        $kpi = Kpi::find($id_kpi);
        $kpi_markahs = KpiMarkah::where('kpi_id', $kpi->id)->get();

        // dd($kpi);
        return view('ppd.kpi.edit2', compact('kpi', 'kpi_markahs'));
    }




    public function update(UpdateKpiRequest $request, Kpi $kpi)
    {

        $kpi->update($request->all());
        return redirect()->route('kpi.index');
    }

    public function update1(UpdateKpiRequest $request, Kpi $kpi)
    {
        $kpi->update($request->all());
        return redirect()->route('kpi.index');
    }

    public function update2(Request $request)
    {

        // $kpi = Kpi::find($id);
        // $kpi_markahs = KpiMarkah::where('kpi_id', $kpi->id)->get();
        $kpi_markahs = new KpiMarkah();

        $kpi_markahs->kpi_id = $request->kpi_id;

        $kpi_markahs->tahun = $request->tahun;
        $kpi_markahs->sukuan_tahun = $request->sukuan_tahun;
        $kpi_markahs->pencapaian = $request->pencapaian;
        $kpi_markahs->peratus_pencapaian = $request->peratus_pencapaian;


        $kpi_markahs->save();
        // dd($request);

        return back();
    }

    public function update3(UpdateKpiRequest $request, Kpi $kpi)
    {
        $kpi->update($request->all());
        return redirect()->route('kpi.index');
    }


    public function destroy(Kpi $kpi)
    {
        $kpi->delete();

        return redirect()->route('kpi.index')
            ->with('Berjaya', 'Keterangan berjaya dibuang');
    }

    public function searchKpi(Request $request)
    {
        $kpi = Kpi::where('id', '!=', 'null');

        if ($request->result[0] != 'null') {
            $kpi->where('fokusutama_id', $request->result[0]);
        }
        if ($request->result[1] != 'null') {
            $kpi->where('perkarautama_id', $request->result[1]);
        }
        if ($request->result[2] != 'null') {
            $kpi->where('pemangkin_id', $request->result[2]);
        }
        if ($request->result[3] != 'null') {
            $kpi->where('bab_id', $request->result[3]);
        }
        if ($request->result[4] != 'null') {
            $kpi->where('bidang_id', $request->result[4]);
        }
        if ($request->result[5] != 'null') {
            $kpi->where('outcome_id', $request->result[5]);
        }

        return response()->json($kpi->get());
    }

    public function searchKpi1(Request $request)
    {
        $kpi = Kpi::where('id', '!=', 'null');

        if ($request->result[0] != 'null') {
            $kpi->where('pemangkin_id', $request->result[0]);
        }
        if ($request->result[1] != 'null') {
            $kpi->where('bab_id', $request->result[1]);
        }
        if ($request->result[2] != 'null') {
            $kpi->where('bidang_id', $request->result[2]);
        }


        return response()->json($kpi->get());
    }
}
