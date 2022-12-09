<?php

namespace App\Http\Controllers;

use App\Imports\ProfilImport;
use App\Models\Bantuan;
use App\Models\Daerah;
use App\Models\Harta;
use App\Models\Indikator;
use App\Models\KategoriBantuan;
use App\Models\Kecacatan;
use App\Models\KemasukanData;
use App\Models\Negeri;
use App\Models\Pendapatan;
use App\Models\Pendapatan_bulanan;
use App\Models\Penyakit;
use App\Models\Perbelanjaan;
use App\Models\Profil;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class KemasukanDataController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // DB::table('profils')->delete();

        $profils = Profil::all();
        return view('KT.kemasukanData.index', compact('profils'));
    }

    public function index1()
    {
        $user = Auth::user();

        $indikators = Indikator::all();
        return view('KT.maklumat.maklumat', compact('user', 'indikators'));
    }

    public function index2($profil_id)
    {

        // $profils = Profil::where('user_id', Auth::user()->id)->get();
        $profils = Profil::find($profil_id);

        $pendapatan_bulanans = Pendapatan_bulanan::where('profil_id', $profils->id)->get();
        return view('KT.maklumat.pendapatan', compact('profils', 'pendapatan_bulanans'));
    }

    public function index3()
    {

        $profils = Profil::all();
        $bantuans = Bantuan::all();

        return view('KT.maklumat.kategori', compact('profils', 'bantuans'));
    }


    public function bahagian()
    {

        $user = auth()->user();
        $profil = Profil::where('user_id', $user->id)->get();

        $negeri = Negeri::with('daerah')->get();

        if ($profil !== null) {
            $uncompletedProfil = null;
            foreach ($profil as $p) {
                if ($p->current_bahagian != 6) {
                    $uncompletedProfil = $p;
                }
            }
            if ($uncompletedProfil != null) {
                $data = ['user' => $user, 'profil' => $uncompletedProfil];
                switch ($uncompletedProfil->current_bahagian) {
                    case '2':
                        return view('KT.kemasukanData.bahagian2', $data);
                        break;
                    case '3':
                        return view('KT.kemasukanData.bahagian3', $data);
                        break;
                    case '4':
                        return view('KT.kemasukanData.bahagian4', $data);
                        break;
                    case '5':
                        $data5 = ['bantuans' => Bantuan::all(), 'user' => $user, 'profil' => $uncompletedProfil];
                        return view('KT.kemasukanData.bahagian5', $data5);
                        break;
                    case '6':
                        return view('KT.kemasukanData.pendapatan', $data);
                        break;
                    case 'Done':
                        return view('KT.kemasukanData.bahagian1', compact('negeri'));
                        break;
                    default:
                        return 'invalid';
                        break;
                }
            } else {
                return view('KT.kemasukanData.bahagian1', compact('negeri'));
            }
        }
        return view('KT.kemasukanData.bahagian1', compact('negeri'));
    }

    public function bahagian6()
    {
        $user = Auth::user();
        return view('KT.kemasukanData.bahagian6', ['user' => $user]);
    }

    public function simpanBahagian1(Request $request)
    {
        $messages = [
            'poskod.min' => ':attribute perlu mempunyai 5 angka.',
            'poskod.max' => ':attribute perlu mempunyai 5 angka sahaja',
            'no_kad_pengenalan.min' => ':attribute perlu mempunyai 12 angka',
            'no_kad_pengenalan.max' => ':attribute perlu mempunyai 12 angka sahaja',

        ];

        $request->validate([
            'nama' => 'required',
            'no_kad_pengenalan' => 'required|min:12|max:12',
            // 'jumlah_kasar_isi_rumah_sebulan' => 'required',
            // 'jumlah_pendapatan_per_kapita' => 'required',
            // 'kategori' => 'required',
            // 'jumlah_isi_rumah' => 'required',
            // 'status_miskin' => 'required',
            // 'status_terkeluar' => 'required',
            // 'strata' => 'required',
            // 'poskod' => 'required|min:5|max:5',
        ], $messages);
        $negeri = Negeri::findorFail($request->negeri_id);
        $daerah = Daerah::findorFail($request->daerah_id);

        $request['alamat1'] = $request->kampung;
        $request['alamat2'] = $request->poskod . " , " . $daerah->name;
        $request['alamat3'] = $negeri->name;
        Profil::create($request->all());
        return back();
    }

    public function simpanBahagian2(Request $request)
    {
        $request->validate([
            // 'tahun_kelahiran' => 'required',
            'tarikh_lahir' => 'required',
            'umur' => 'required',
            'jantina' => 'required',
            'kumpulan_etnik' => 'required',
            'kewarganegaraan' => 'required',
            'agama' => 'required',
            'status_perkahwinan' => 'required',
            'taraf_pendidikan' => 'required',
            'kemahiran_yang_dimiliki' => 'required',
            'status_pekerjaan_utama' => 'required',
        ]);

        $user_id = auth()->id();

        if ($request->harta != null) {
            foreach ($request->harta as $harta) {
                Harta::create([
                    'nama_harta' => $harta,
                    'profil_id' => $request->profil_id,
                    'user_id' => $user_id,
                ]);
            }
        }
        if ($request->penyakit != null) {
            foreach ($request->penyakit as $penyakit) {
                Penyakit::create([
                    'kod_penyakit' => $penyakit,
                    'profil_id' => $request->profil_id,
                    'user_id' => $user_id,
                ]);
            }
        }
        if ($request->kumpulan_perbenlanjaan != null) {
            foreach ($request->kumpulan_perbenlanjaan as $kp) {
                Perbelanjaan::create([
                    'kod_perbelanjaan' => $kp,
                    'profil_id' => $request->profil_id,
                    'user_id' => $user_id,
                ]);
            }
        }
        if ($request->kecacatan != null) {
            foreach ($request->kecacatan as $kecacatan) {
                Kecacatan::create([
                    'kod_cacat' => $kecacatan,
                    'profil_id' => $request->profil_id,
                    'user_id' => $user_id,
                ]);
            }
        }

        Profil::find($request->profil_id)->update($request->all());

        return back();
    }

    public function simpanBahagian3(Request $request)
    {
        $request->validate([
            'pendapatan_harta' => 'required',
            'kiriman_isi_rumah' => 'required',
            'nafkah' => 'required',
            'biasiswa' => 'required',
            'pencen' => 'required',
            'hadiah' => 'required',
            'pembayaran' => 'required',
            // 'jumlah_bantuan' => 'required',
            'jumlah_impak_bantuan' => 'required',
            'jumlah_pendapatan_kasar' => 'required',
        ]);

        $user_id = auth()->id();
        $jumlah_pendapatan = 0;
        foreach ($request->jumlah_pendapatan as $p) {
            $jumlah_pendapatan += $p;
        }
        $jumlah_pendapatan -= $request->jumlah_keluaran;

        Pendapatan::create([
            'jumlah_pendapatan' => $jumlah_pendapatan,
            'pendapatan_harta' => $request->pendapatan_harta,
            'kiriman_isi_rumah' => $request->kiriman_isi_rumah,
            'nafkah' => $request->nafkah,
            'biasiswa' => $request->biasiswa,
            'pencen' => $request->pencen,
            'hadiah' => $request->hadiah,
            'pembayaran' => $request->pembayaran,
            'profil_id' => $request->profil_id,
            'user_id' => $user_id,
        ]);

        Profil::find($request->profil_id)->update([
            'current_bahagian' => $request->current_bahagian,
            'jumlah_bantuan' => $request->jumlah_bantuan,
            'jumlah_impak_bantuan' => $request->jumlah_impak_bantuan,
            'jumlah_pendapatan_kasar' => $request->jumlah_pendapatan_kasar,
        ]);

        return back();
    }

    public function simpanBahagian4(Request $request)
    {
        $request->validate([
            'result' => 'required',
        ]);

        Profil::find($request->profil_id)->update([
            'anggaran_perbelanjaan_isi_rumah' => $request->result,
            'current_bahagian' => '5',
        ]);

        return back();
    }

    public function simpanBahagian5(Request $request)
    {
        KategoriBantuan::create($request->all());

        Profil::find($request->profil_id)->update([
            'bantuan_id' => $request->program_yang_diterima,
            'current_bahagian' => 'Done',
        ]);

        return back();
    }

    public function simpanPendapatan(Request $request)
    {

        $pendapatan_bulanans = new Pendapatan_bulanan();

        $pendapatan_bulanans->profil_id = $request->profil_id;
        $pendapatan_bulanans->bulan = $request->bulan;
        $pendapatan_bulanans->pendapatan = $request->pendapatan;

        $pendapatan_bulanans->save();

        return back();
    }

    public function simpanIndikator(Request $request)
    {
        $indikator = new Indikator();

        $indikator->user_id = $request->user_id;
        $indikator->kts = $request->kts;
        $indikator->ppg = $request->ppg;
        $indikator->pikm = $request->pikm;

        $indikator->save();


        return back();
    }

    public function simpanKategori(Request $request, $profil_id)
    {
        Profil::find($profil_id);


        return back();
    }



    public function store(Request $request)
    {
        $data = KemasukanData::create($request->all());
        return redirect()->route('kemasukanData.index');
    }


    public function show(KemasukanData $kemasukanData)
    {
        //
    }


    public function edit($id)
    {
        $profil = Profil::find($id);

        $negeri = Negeri::all();
        $daerah = Daerah::all();

        // dd($profil->id);
        return view('KT.kemasukanData.edit', compact('profil', 'negeri', 'daerah'));
    }

    public function edit1($id)
    {
        $profil = Profil::find($id);

        $negeri = Negeri::all();
        $daerah = Daerah::all();

        // dd($profil->id);
        return view('KT.kemasukanData.edit1', compact('profil', 'negeri', 'daerah'));
    }

    public function edit2($id)
    {
        $profil = Profil::find($id);

        $negeri = Negeri::all();
        $daerah = Daerah::all();

        // dd($profil->id);
        return view('KT.kemasukanData.edit2', compact('profil', 'negeri', 'daerah'));
    }

    public function edit3($id)
    {
        $profil = Profil::find($id);

        $negeri = Negeri::all();
        $daerah = Daerah::all();

        // dd($profil->id);
        return view('KT.kemasukanData.edit3', compact('profil', 'negeri', 'daerah'));
    }

    public function edit4($id)
    {
        $profil = Profil::find($id);

        $negeri = Negeri::all();
        $daerah = Daerah::all();

        // dd($profil->id);
        return view('KT.kemasukanData.edit4', compact('profil', 'negeri', 'daerah'));
    }


    public function update(Request $request, $id)
    {
        // dd($request);
        $profil = Profil::find($id);

        // $profil_id->update($request->all());
        $profil->user_id = Auth::user()->id;
        $profil->nama = $request->nama;
        $profil->no_kad_pengenalan = $request->no_kad_pengenalan;
        $profil->jumlah_kasar_isi_rumah_sebulan = $request->jumlah_kasar_isi_rumah_sebulan;
        $profil->jumlah_pendapatan_per_kapita = $request->jumlah_pendapatan_per_kapita;
        $profil->kategori = $request->kategori;
        $profil->jumlah_isi_rumah = $request->jumlah_isi_rumah;
        $profil->status_miskin = $request->status_miskin;
        $profil->status_terkeluar = $request->status_terkeluar;
        $profil->strata = $request->strata;
        $profil->poskod = $request->poskod;

        $profil->negeri_id = $request->negeri_id;
        $profil->daerah_id = $request->daerah_id;


        $profil->save();

        return redirect('/KT/kemasukanData/index');
    }

    public function update1(Request $request, $id)
    {

        $profil = Profil::find($id);

        $profil->user_id = Auth::user()->id;
        $profil->tarikh_lahir = $request->tarikh_lahir;
        $profil->umur = $request->umur;
        $profil->jantina = $request->jantina;
        $profil->kumpulan_etnik = $request->kumpulan_etnik;
        $profil->kewarganegaraan = $request->kewarganegaraan;
        $profil->agama = $request->agama;
        $profil->status_perkahwinan = $request->status_perkahwinan;
        $profil->taraf_pendidikan = $request->taraf_pendidikan;
        $profil->kemahiran_yang_dimiliki = $request->kemahiran_yang_dimiliki;
        $profil->status_pekerjaan_utama = $request->status_pekerjaan_utama;

        $profil->save();

        return redirect('/KT/kemasukanData/index');
    }

    public function update2(Request $request, $id)
    {

        $profil = Profil::find($id);

        $profil->user_id = Auth::user()->id;
        $profil->pendapatan_harta = $request->pendapatan_harta;
        $profil->kiriman_isi_rumah = $request->kiriman_isi_rumah;
        $profil->nafkah = $request->nafkah;
        $profil->biasiswa = $request->biasiswa;
        $profil->pencen = $request->pencen;
        $profil->hadiah = $request->hadiah;
        $profil->pembayaran = $request->pembayaran;
        $profil->jumlah_bantuan = $request->jumlah_bantuan;
        $profil->jumlah_impak_bantuan = $request->jumlah_impak_bantuan;
        $profil->jumlah_pendapatan_kasar = $request->jumlah_pendapatan_kasar;

        $profil->save();

        return redirect('/KT/kemasukanData/index');
    }

    public function update3(Request $request, $id)
    {



        $profil = Profil::find($id);

        $profil->save();

        return redirect('/KT/kemasukanData/index');
    }

    public function update4(Request $request, $id)
    {

        $profil = Profil::find($id);

        $profil->save();

        return redirect('/KT/kemasukanData/index');
    }

    public function destroy($id)
    {

        // dd('test');
        $profil = Profil::where('id', $id)->first();
        $profil->delete();

        return redirect()->back();

        // return redirect()->route('KT.kemasukanData.index')
        //     ->with('Berjaya', 'Profil berjaya dibuang');
    }

    public function import()
    {
        Excel::import(new ProfilImport, request()->file('profilfile'));
        return back()->with('success');
    }
}
