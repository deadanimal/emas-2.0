<?php

namespace App\Http\Controllers;

use App\Models\activity;
use App\Models\Bantuan;

use App\Models\Daerah;
use App\Models\Info_kampung;
use App\Models\Kampung;
use App\Models\KetuaKampung;
use App\Models\Negeri;
use App\Models\Profil;

use Illuminate\Http\Request;

class BantuanController extends Controller
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
        $bantuans = Bantuan::all();


        return view('kt.bantuan.index', compact('bantuans'));
    }

    public function berdasarkan_negeri()
    {
        $bantuans = Bantuan::with(['negeri'])->get()->sortBy('negeri');

        foreach ($bantuans as $bantuan) {
            $bantuan['kir'] = Profil::where([['bantuan_id', $bantuan->id], ['kategori', 'KIR']])->count();
            $bantuan['air'] = Profil::where([['bantuan_id', $bantuan->id], ['kategori', 'AIR']])->count();
        }
        return view('kt.bantuan.berdasarkan_negeri', compact('bantuans'));
    }

    public function senarai_ketua_kampung()
    {
        $negeris = Negeri::all();
        $daerahs = Daerah::all();
        $kampungs = Kampung::all();
        $ketuakampungs = KetuaKampung::all();
        return view('kt.bantuan.senarai_ketua_kampung', compact('ketuakampungs', 'negeris', 'daerahs', 'kampungs'));
    }

    public function senarai_kampung_menerima()
    {
        $bantuans = Info_kampung::all();

        return view('kt.bantuan.senarai_kampung_menerima', compact('bantuans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $negeri = Negeri::with('daerah')->get();
        return view('kt.bantuan.create', compact('negeri'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Bantuan::create($request->all());

        return redirect()->route('bantuan.index');
    }

    public function store1(Request $request)
    {

        // dd('test');
        $ketua = new Maklumat_penghulu_mukim();
        $ketua->nama_penghulu = $request->nama_penghulu;
        $ketua->no_kad_pengenalan = $request->no_kad_pengenalan;
        $ketua->tahun_mula_berkhidmat = $request->tahun_mula_berkhidmat;
        $ketua->tahun_tamat_berkhidmat = $request->tahun_tamat_berkhidmat;
        $ketua->no_tel_pejabat = $request->no_tel_pejabat;
        $ketua->no_tel_bimbit = $request->no_tel_bimbit;

        $ketua->save();
        return redirect('/bantuan1/senarai_ketua_kampung');
    }

    public function store2(Request $request)
    {
        // dd('test');
        $kampung = new Info_kampung();
        $kampung->nama_kampung = $request->nama_kampung;
        $kampung->maklumat_kampung = $request->maklumat_kampung;
        $kampung->alamat_kampung = $request->alamat_kampung;
        $kampung->keterangan_kampung = $request->keterangan_kampung;

        $kampung->save();
        return redirect('/bantuan1/senarai_kampung_menerima');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bantuan  $bantuan
     * @return \Illuminate\Http\Response
     */
    public function show(Bantuan $bantuan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bantuan  $bantuan
     * @return \Illuminate\Http\Response
     */
    public function edit(Bantuan $bantuan)
    {
        $negeri = Negeri::with('daerah')->get();
        $daerah = Daerah::all();

        return view('kt.bantuan.edit', compact('bantuan', 'negeri', 'daerah'));
    }

    public function edit1($id)
    {
        // dd('2');
        $ketua = Maklumat_penghulu_mukim::find($id);
        return view('kt.bantuan.edit1', compact('ketua'));
    }

    public function edit2($id)
    {
        $kampung = Info_kampung::find($id);
        return view('kt.bantuan.edit2', compact('kampung'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bantuan  $bantuan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bantuan $bantuan)
    {
        $bantuan->update($request->all());

        return redirect()->route('bantuan.index');
    }

    public function update2(Request $request, Info_kampung $kampung)
    {
        $kampung->nama_kampung = $request->nama_kampung;
        $kampung->maklumat_kampung = $request->maklumat_kampung;
        $kampung->alamat_kampung = $request->alamat_kampung;
        $kampung->keterangan_kampung = $request->keterangan_kampung;

        $kampung->save();

        return redirect('/bantuan1/senarai_kampung_menerima');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bantuan  $bantuan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bantuan $bantuan)
    {
        $bantuan->delete();
        return back();
    }
}
