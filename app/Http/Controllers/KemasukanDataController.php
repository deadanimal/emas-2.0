<?php

namespace App\Http\Controllers;

use App\Imports\ProfilImport;
use App\Models\KemasukanData;
use App\Models\Lokaliti;
use App\Models\Negeri_mukim;
use App\Models\Negeri_parlimen;
use App\Models\Profil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class KemasukanDataController extends Controller
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function bahagian1()
    {
        $user = Auth::user();
        return view('kt.kemasukanData.bahagian1', ['user' => $user]);
    }

    public function bahagian2()
    {
        $user = Auth::user();
        return view('kt.kemasukanData.bahagian2', ['user' => $user]);
    }

    public function bahagian3()
    {
        $user = Auth::user();
        return view('kt.kemasukanData.bahagian3', ['user' => $user]);
    }

    public function bahagian4()
    {
        $user = Auth::user();
        return view('kt.kemasukanData.bahagian4', ['user' => $user]);
    }

    public function bahagian5()
    {
        $user = Auth::user();
        return view('kt.kemasukanData.bahagian5', ['user' => $user]);
    }

    public function bahagian6()
    {
        $user = Auth::user();
        return view('kt.kemasukanData.bahagian6', ['user' => $user]);
    }

    public function simpanBahagian1(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'no_kad_pengenalan' => 'required',
            'jumlah_kasar_isi_rumah_sebulan' => 'required',
            'jumlah_pendapatan_per_kapita' => 'required',
            'kategori' => 'required',
            'jumlah_isi_rumah' => 'required',
            'status_miskin' => 'required',
            'status_terkeluar' => 'required',
            'negeri' => 'required',
            'daerah' => 'required',
            'mukim' => 'required',
            'parlimen' => 'required',
            'dun' => 'required',
            'strata' => 'required',
            'alamat1' => 'required',
            'poskod' => 'required',
            'lokaliti' => 'required',
        ]);

        $user_id = auth()->id();

        $lokaliti = Lokaliti::create([
            'keterangan_lokaliti' => $request->lokaliti,
            'user_id' => $user_id,
        ]);

        $parlimen = Negeri_parlimen::create([
            'parlimen_name' => $request->parlimen,
            'dun' => $request->dun,
            'negeri' => $request->negeri,
            'user_id' => $user_id,
            'lokaliti_id' => $lokaliti->id,

        ]);

        $mukim = Negeri_mukim::create([
            'mukim_name' => $request->mukim,
            'daerah' => $request->daerah,
            'negeri' => $request->negeri,
            'user_id' => $user_id,
            'lokaliti_id' => $lokaliti->id,
        ]);

        $profil = Profil::create($request->all());
        $profil->update([
            'user_id' => $user_id,
            'negeri_mukim_id' => $mukim->id,
            'lokaliti_id' => $lokaliti->id,
            'negeri_parlimen_id' => $parlimen->id,
        ]);

        return back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = KemasukanData::create($request->all());
        return redirect()->route('kemasukanData.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KemasukanData  $kemasukanData
     * @return \Illuminate\Http\Response
     */
    public function show(KemasukanData $kemasukanData)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KemasukanData  $kemasukanData
     * @return \Illuminate\Http\Response
     */
    public function edit(KemasukanData $kemasukanData)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KemasukanData  $kemasukanData
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KemasukanData $kemasukanData)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KemasukanData  $kemasukanData
     * @return \Illuminate\Http\Response
     */
    public function destroy(KemasukanData $kemasukanData)
    {
        //
    }

    public function import()
    {
        Excel::import(new ProfilImport, request()->file('profilfile'));
        return back();
    }
}
