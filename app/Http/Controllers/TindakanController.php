<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTindakanRequest;
use App\Http\Requests\UpdateTindakanRequest;
use App\Models\Bab;
use App\Models\Bidang;
use App\Models\Fokusutama;
use App\Models\Perkarautama;
use App\Models\Inisiatif;
use App\Models\Pemangkindasar;
use App\Models\Strategi;
use App\Models\Tindakan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;



class TindakanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tindakans = Tindakan::all();
        $list= Inisiatif::all();
        $fokus= Fokusutama::all();
        $perkara= Perkarautama::all();
        $pemangkin= Pemangkindasar::all();
        $bab= Bab::all();
        $bidang= Bidang::all();
        $strategi= Strategi::all();

        return view('ppd.tindakan.index', compact('tindakans', 'list', 'fokus','perkara','pemangkin','bab','bidang','strategi'));
    }

    public function index1()
    {
        $tindakans = Tindakan::all();
        $tema = Pemangkindasar::all();
        $bab = Bab::all();
        $bidang = Bidang::all();

        return view('ppd.tindakan.index1', compact('tindakans', 'bab', 'tema', 'bidang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();

        $list= Inisiatif::all();
        $fokus= Fokusutama::all();
        $perkara= Perkarautama::all();
        $pemangkin= Pemangkindasar::all();
        $bab= Bab::all();
        $bidang= Bidang::all();
        $strategi= Strategi::all();
        return view('ppd.tindakan.create', compact('user', 'list', 'fokus','perkara','pemangkin','bab','bidang','strategi'));
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
        $list= Inisiatif::all();
        $fokus= Fokusutama::all();
        $perkara= Perkarautama::all();
        $pemangkin= Pemangkindasar::all();
        $bab= Bab::all();
        $bidang= Bidang::all();
        $strategi= Strategi::all();
        return view('ppd.tindakan.edit', compact('tindakan', 'list', 'fokus','perkara','pemangkin','bab','bidang','strategi'));

    }

    public function edit1($id_tindakan)
    {
        $tindakans = Tindakan::find($id_tindakan);

        return view('ppd.tindakan.edit1', compact('tindakans'));

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
        $tindakan->update($request->all());
        return redirect()->route('tindakan.index');
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
