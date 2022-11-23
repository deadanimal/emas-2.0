<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTindakanRequest;
use App\Http\Requests\UpdateTindakanRequest;
use App\Models\Bab;
use App\Models\Bidang;
use App\Models\Fokusutama;
use App\Models\Perkarautama;
use App\Models\Inisiatif;
use App\Models\Organisasi;
use App\Models\Outcome;
use App\Models\Pemangkindasar;
use App\Models\Strategi;
use App\Models\Tindakan;
use App\Models\TindakanMarkah;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;



class TindakanController extends Controller
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
        $tindakans = Tindakan::all();
        $list = Inisiatif::all();
        $fokus = Fokusutama::all();
        $perkara = Perkarautama::all();
        $pemangkin = Pemangkindasar::all();
        $bab = Bab::all();
        $bidang = Bidang::all();
        $strategi = Strategi::all();

        return view('ppd.tindakan.index', compact('tindakans', 'list', 'fokus', 'perkara', 'pemangkin', 'bab', 'bidang', 'strategi'));
    }

    public function index1()
    {
        $tindakans = Tindakan::all();
        $tema = Pemangkindasar::all();
        $bab = Bab::all();
        $bidang = Bidang::all();
        $strategis = Strategi::all();
        $inisiatifs = Inisiatif::all();


        //graph 1
        $lulus = Tindakan::where([
            ['lulus', '=', '1']
        ])->count();
        $ditolak = Tindakan::where([
            ['ditolak', '=', '1']
        ])->count();

        $semakan = Tindakan::where([
            ['lulus', '=', null], ['ditolak', '=', null]
        ])->count();

        $tiada_tindakan = Tindakan::where([
            ['ditolak', '=', 'null']
        ])->count();

        //graph 2

        //graph 3
        $jumlah_tema = Pemangkindasar::where([
            ['kategori_id', '=', '1']
        ])->count();
        $jumlah_pemangkin = Pemangkindasar::where([
            ['kategori_id', '=', '2']
        ])->count();




        return view('ppd.tindakan.index1', compact(
            'tindakans',
            'bab',
            'tema',
            'bidang',
            'inisiatifs',
            'strategis',
            'lulus',
            'ditolak',
            'semakan',
            'tiada_tindakan',
            'jumlah_tema',
            'jumlah_pemangkin'
        ));
    }

    public function index2()
    {
        $tindakans = Tindakan::all();
        $list = Inisiatif::all();
        $fokus = Fokusutama::all();
        $perkara = Perkarautama::all();
        $pemangkin = Pemangkindasar::all();
        $bab = Bab::all();
        $bidang = Bidang::all();
        $strategi = Strategi::all();

        return view('ppd.tindakan.index2', compact('tindakans', 'list', 'fokus', 'perkara', 'pemangkin', 'bab', 'bidang', 'strategi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();

        $list = Inisiatif::all();
        $fokuss = Fokusutama::all();
        $perkaras = Perkarautama::all();
        $pemangkin = Pemangkindasar::all();
        $bab = Bab::all();
        $bidang = Bidang::all();
        $strategi = Strategi::all();
        return view('ppd.tindakan.create', compact('user', 'list', 'fokuss', 'perkaras', 'pemangkin', 'bab', 'bidang', 'strategi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTindakanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTindakanRequest $request)
    {
        $tindakan = Tindakan::create($request->all());
        return redirect()->route('tindakan.index');
    }

    public function lulus($id)
    {

        $tindakan = Tindakan::find($id);
        $tindakan->lulus = true;
        $tindakan->ditolak = false;
        $tindakan->save();

        return redirect()->to('tindakan1/index1');
    }

    public function ditolak(Request $request)
    {
        $tindakan = Tindakan::find($request->id);
        $tindakan->lulus = false;
        $tindakan->ditolak = true;
        $tindakan->save();

        return redirect()->to('tindakan1/index1');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tindakan  $tindakan
     * @return \Illuminate\Http\Response
     */
    public function show(Tindakan $tindakan)
    {
        return view('ppd.tindakan.show', compact('tindakan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tindakan  $tindakan
     * @return \Illuminate\Http\Response
     */
    public function edit(Tindakan $tindakan)
    {
        $list = Inisiatif::all();
        $fokuss = Fokusutama::all();
        $perkaras = Perkarautama::all();
        $pemangkin = Pemangkindasar::all();
        $bab = Bab::all();
        $bidang = Bidang::all();
        $strategi = Strategi::all();
        return view('ppd.tindakan.edit', compact('tindakan', 'list', 'fokuss', 'perkaras', 'pemangkin', 'bab', 'bidang', 'strategi'));
    }

    public function edit1($id_tindakan)
    {
        $tindakans = Tindakan::find($id_tindakan);

        $users = User::permission('PPD - Penyelaras')->get();
        $organisasis = Organisasi::where('jenis', 'bahagian')->get();



        return view('ppd.tindakan.edit1', compact('tindakans', 'users', 'organisasis'));
    }

    public function edit2($id_tindakan)
    {
        $tindakans = Tindakan::find($id_tindakan);
        $tindakan_markahs = TindakanMarkah::where('tindakan_id', $tindakans->id)->get();



        return view('ppd.tindakan.edit2', compact('tindakans', 'tindakan_markahs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTindakanRequest  $request
     * @param  \App\Models\Tindakan  $tindakan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTindakanRequest $request, Tindakan $tindakan)
    {
        $tindakan->update($request->all());
        return redirect()->route('tindakan.index');
    }

    public function update1(UpdateTindakanRequest $request, Tindakan $tindakan)
    {
        $user = Auth::user();

        $tindakan->update($request->all());
        return redirect()->route('tindakan.index');
    }

    public function update2(Request $request)
    {
        $tindakan_markahs = new TindakanMarkah();

        $tindakan_markahs->tindakan_id = $request->tindakan_id;

        $tindakan_markahs->tahun = $request->tahun;
        $tindakan_markahs->sukuan_tahun = $request->sukuan_tahun;
        $tindakan_markahs->sukuan_tahun = $request->sukuan_tahun;
        $tindakan_markahs->status_pelaksanaan = $request->status_pelaksanaan;
        $tindakan_markahs->catatan = $request->catatan;
        $tindakan_markahs->sasaran = $request->sasaran;
        $tindakan_markahs->pencapaian = $request->pencapaian;

        $tindakan_markahs->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tindakan  $tindakan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tindakan $tindakan)
    {
        $tindakan->delete();

        return redirect()->route('tindakan.index')
            ->with('Berjaya', 'Keterangan berjaya dibuang');
    }

    public function searchTindakan(Request $request)
    {
        $tindakan = Tindakan::where('id', '!=', 'null');

        if ($request->result[0] != 'null') {
            $tindakan->where('fokus_id', $request->result[0]);
        }
        if ($request->result[1] != 'null') {
            $tindakan->where('perkara_id', $request->result[1]);
        }
        if ($request->result[2] != 'null') {
            $tindakan->where('pemangkin_id', $request->result[2]);
        }
        if ($request->result[3] != 'null') {
            $tindakan->where('bab_id', $request->result[3]);
        }
        if ($request->result[4] != 'null') {
            $tindakan->where('bidang_id', $request->result[4]);
        }
        if ($request->result[5] != 'null') {
            $tindakan->where('strategi_id', $request->result[5]);
        }
        if ($request->result[6] != 'null') {
            $tindakan->where('inisiatif_id', $request->result[6]);
        }

        return response()->json($tindakan->get());
    }
}
