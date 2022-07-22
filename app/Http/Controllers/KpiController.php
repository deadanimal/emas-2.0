<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKpiRequest;
use App\Http\Requests\UpdateKpiRequest;
use App\Models\Bab;
use App\Models\Bidang;
use App\Models\Fokusutama;
use App\Models\Kpi;
use App\Models\Outcome;
use App\Models\Pemangkindasar;
use App\Models\Perkarautama;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KpiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

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

        if ($request->user()->role == 'admin') {

            $kpis = Kpi::all();
        } else {
            $user_id = $request->user()->id;

            $kpis = Kpi::where('user_id', '=', $user_id)->get();
        }

        return view('ppd.kpi.index1', compact('kpis', 'tema', 'bab', 'bidang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();

        $list = Outcome::all();
        $listBidang = Bidang::all();
        $listBab = Bab::all();
        $listTema = Pemangkindasar::all();

        $fokusUtama = Fokusutama::all();
        $perkaraUtama = Perkarautama::all();

        return view('ppd.kpi.create', compact('user', 'list', 'listBidang', 'listBab', 'listTema', 'fokusUtama', 'perkaraUtama'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreKpiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKpiRequest $request)
    {

        $kpi = Kpi::create($request->validated());

        return redirect()->route('kpi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kpi  $kpi
     * @return \Illuminate\Http\Response
     */

    public function lulus($id)
    {

        $kpi = Kpi::find($id);
        $kpi->lulus = true;
        $kpi->ditolak = false;
        $kpi->save();

        return redirect()->to('kpi1/index1');
    }

    public function ditolak(Request $request)
    {
        $kpi = Kpi::find($request->id);
        $kpi->lulus = false;
        $kpi->ditolak = true;
        $kpi->save();

        return redirect()->to('kpi1/index1');
    }

    public function show(Kpi $kpi)
    {
        return view('ppd.kpi.show', compact('kpi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kpi  $kpi
     * @return \Illuminate\Http\Response
     */
    public function edit(Kpi $kpi)
    {
        // $kpi = Kpi::find($kpi);
        $list = Outcome::all();
        $listBidang = Bidang::all();
        $listBab = Bab::all();
        $listTema = Pemangkindasar::all();

        $fokusUtama = Fokusutama::all();
        $perkaraUtama = Perkarautama::all();

        return view('ppd.kpi.edit', compact('kpi', 'list', 'listBidang', 'listBab', 'listTema', 'fokusUtama', 'perkaraUtama'));
    }

    public function edit1($id_kpi)
    {
        $kpi = Kpi::find($id_kpi);
        // dd($kpi);
        // $list= Outcome::where('id', $kpi->outcome_id)->first();
        // $listBidang= Bidang::where('id', $kpi->bidang_id)->first();
        // $listBab= Bab::where('id', $kpi->bab_id)->first();
        // $listTema= Pemangkindasar::where('id', $kpi->pemangkin_id)->first();

        return view('ppd.kpi.edit1', compact('kpi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKpiRequest  $request
     * @param  \App\Models\Kpi  $kpi
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kpi  $kpi
     * @return \Illuminate\Http\Response
     */
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
