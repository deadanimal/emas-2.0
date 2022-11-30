<?php

namespace App\Http\Controllers;

use App\Models\Bantuan;
use App\Models\Daerah;
use App\Models\Info_kampung;
use App\Models\Kampung;
use App\Models\KetuaKampung;
use App\Models\Negeri;
use App\Models\Profil;
use App\Models\Maklumat_penghulu_mukim;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;


class BantuanController extends Controller
{


    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $bantuans = Bantuan::all();

        return view('KT.bantuan.index', compact('bantuans'));
    }


    public function berdasarkan_negeri() {
        $bantuans = Bantuan::with(['negeri'])->get()->sortBy('negeri');

        foreach ($bantuans as $bantuan) {
            $bantuan['kir'] = Profil::where([['bantuan_id', $bantuan->id], ['kategori', 'KIR']])->count();
            $bantuan['air'] = Profil::where([['bantuan_id', $bantuan->id], ['kategori', 'AIR']])->count();
        }
        return view('KT.bantuan.berdasarkan_negeri', compact('bantuans'));
    }

    public function senarai_ketua_kampung() {
        $negeris = Negeri::all();
        $daerahs = Daerah::all();
        $kampungs = Kampung::all();
        $ketuakampungs = KetuaKampung::all();

        return view('KT.bantuan.senarai_ketua_kampung', compact('ketuakampungs', 'negeris', 'daerahs', 'kampungs'));
    }

    public function senarai_kampung_menerima() {
        $bantuans = Info_kampung::all();

        return view('KT.bantuan.senarai_kampung_menerima', compact('bantuans'));
    }


    public function create() {
        $negeri = Negeri::with('daerah')->get();

        return view('KT.bantuan.create', compact('negeri'));
    }


    public function store(Request $request) {
        Bantuan::create($request->all());

        return redirect()->route('bantuan.index');
    }

    public function store1(Request $request) {

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

    public function store2(Request $request) {
        // dd('test');
        $kampung = new Info_kampung();
        $kampung->nama_kampung = $request->nama_kampung;
        $kampung->maklumat_kampung = $request->maklumat_kampung;
        $kampung->alamat_kampung = $request->alamat_kampung;
        $kampung->keterangan_kampung = $request->keterangan_kampung;

        $kampung->save();
        return redirect('/bantuan1/senarai_kampung_menerima');
    }


    public function show(Bantuan $bantuan) {
        //
    }


    public function edit(Bantuan $bantuan) {
        $negeri = Negeri::with('daerah')->get();
        $daerah = Daerah::all();

        return view('KT.bantuan.edit', compact('bantuan', 'negeri', 'daerah'));
    }

    public function edit1($id) {
        // dd('2');
        $ketua = Maklumat_penghulu_mukim::find($id);
        return view('KT.bantuan.edit1', compact('ketua'));
    }

    public function edit2($id) {
        $kampung = Info_kampung::find($id);
        return view('KT.bantuan.edit2', compact('kampung'));
    }


    public function update(Request $request, Bantuan $bantuan) {
        $bantuan->update($request->all());

        return redirect()->route('bantuan.index');
    }

    public function update2(Request $request, Info_kampung $kampung) {
        $kampung->nama_kampung = $request->nama_kampung;
        $kampung->maklumat_kampung = $request->maklumat_kampung;
        $kampung->alamat_kampung = $request->alamat_kampung;
        $kampung->keterangan_kampung = $request->keterangan_kampung;

        $kampung->save();

        return redirect('/bantuan1/senarai_kampung_menerima');
    }

    public function destroy(Bantuan $bantuan) {
        $bantuan->delete();
        return back();
    }

    public function find(Request $request) {
        if ($request->daerah == 'null') {
            $bantuan = Bantuan::where('negeri_id', $request->negeri)
                ->get();
        } elseif ($request->kampung == 'null') {
            $bantuan = Bantuan::where('negeri_id', $request->negeri)
                ->where('daerah_id', $request->daerah)
                ->get();
        } elseif ($request->kampung != 'null') {
            $bantuan = Bantuan::where('negeri_id', $request->negeri)
                ->where('daerah_id', $request->daerah)
                ->where('kampung_id', $request->kampung)
                ->get();
        }
        return response()->json($bantuan);
    }

    public function print_bantuan(Request $request, $id) {
        $bantuan = Bantuan::find($id);

        // generate pdf using DomPDF
        $pdf = FacadePdf::loadView('kt.borang.bantuan', compact('bantuan'));
        return $pdf->stream('Jenis_Bantuan.pdf');
    }

    public function print_bantuan_negeri(Request $request, $id) {
        $bantuan = Bantuan::with(['negeri'])->get()->sortBy('negeri')->find($id);

        $bantuan['kir'] = Profil::where([['bantuan_id', $bantuan->id], ['kategori', 'KIR']])->count();
        $bantuan['air'] = Profil::where([['bantuan_id', $bantuan->id], ['kategori', 'AIR']])->count();

        // generate pdf using DomPDF
        $pdf = FacadePdf::loadView('kt.borang.bantuan_negeri', compact('bantuan'));
        return $pdf->stream('Jenis_Bantuan_Negeri.pdf');
    }
}
