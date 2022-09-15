<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInisiatifRequest;
use App\Http\Requests\UpdateInisiatifRequest;
use App\Models\Bab;
use App\Models\Bidang;
use App\Models\Fokusutama;
use App\Models\Inisiatif;
use App\Models\Pemangkindasar;
use App\Models\Perkarautama;
use App\Models\Strategi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;



class InisiatifController extends Controller
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
        $inisiatifs = Inisiatif::all();

        $list = Strategi::all();
        $fokus = Fokusutama::all();
        $perkara = Perkarautama::all();
        $pemangkin = Pemangkindasar::all();
        $bab = Bab::all();
        $bidang = Bidang::all();


        return view('ppd.inisiatif.index', compact('inisiatifs', 'list', 'fokus', 'perkara', 'pemangkin', 'bab', 'bidang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();

        $list = Strategi::all();
        $fokuss = Fokusutama::all();
        $perkaras = Perkarautama::all();
        $pemangkin = Pemangkindasar::all();
        $bab = Bab::all();
        $bidang = Bidang::all();
        return view('ppd.inisiatif.create', compact('user', 'list', 'fokuss', 'perkaras', 'pemangkin', 'bab', 'bidang'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreInisiatifRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInisiatifRequest $request)
    {
        $inisiatif = Inisiatif::create($request->validated());
        return redirect()->route('inisiatif.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inisiatif  $inisiatif
     * @return \Illuminate\Http\Response
     */
    public function show(Inisiatif $inisiatif)
    {
        return view('ppd.inisiatif.show', compact('inisiatif'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inisiatif  $inisiatif
     * @return \Illuminate\Http\Response
     */
    public function edit(Inisiatif $inisiatif)
    {
        $list = Strategi::all();
        $fokuss = Fokusutama::all();
        $perkaras = Perkarautama::all();
        $pemangkin = Pemangkindasar::all();
        $bab = Bab::all();
        $bidang = Bidang::all();

        return view('ppd.inisiatif.edit', compact('inisiatif', 'list', 'fokuss', 'perkaras', 'pemangkin', 'bab', 'bidang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInisiatifRequest  $request
     * @param  \App\Models\Inisiatif  $inisiatif
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInisiatifRequest $request, Inisiatif $inisiatif)
    {
        $inisiatif->update($request->all());
        return redirect()->route('inisiatif.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inisiatif  $inisiatif
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inisiatif $inisiatif)
    {
        $inisiatif->delete();

        return redirect()->route('inisiatif.index')
            ->with('Berjaya', 'Keterangan berjaya dibuang');
    }

    public function searchInisiatif(Request $request)
    {
        $inisiatif = Inisiatif::where('id', '!=', 'null');

        if ($request->result[0] != 'null') {
            $inisiatif->where('fokus_id', $request->result[0]);
        }
        if ($request->result[1] != 'null') {
            $inisiatif->where('perkara_id', $request->result[1]);
        }
        if ($request->result[2] != 'null') {
            $inisiatif->where('pemangkin_id', $request->result[2]);
        }
        if ($request->result[3] != 'null') {
            $inisiatif->where('bab_id', $request->result[3]);
        }
        if ($request->result[4] != 'null') {
            $inisiatif->where('bidang_id', $request->result[4]);
        }
        if ($request->result[5] != 'null') {
            $inisiatif->where('strategi_id', $request->result[5]);
        }

        return response()->json($inisiatif->get());
    }
}
