<?php

namespace App\Http\Controllers;

use App\Imports\ProfilImport;
use App\Models\Bantuan;
use App\Models\Daerah;
use App\Models\Harta;
use App\Models\KategoriBantuan;
use App\Models\Kecacatan;
use App\Models\KemasukanData;
use App\Models\Negeri;
use App\Models\Pendapatan;
use App\Models\Penyakit;
use App\Models\Perbelanjaan;
use App\Models\Profil;
use App\Models\User;
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
        $profils = Profil::all();
        return view('KT.kemasukanData.index', compact('profils'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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

        ];

        $request->validate([
            'nama' => 'required',
            'no_kad_pengenalan' => 'required',
            'jumlah_kasar_isi_rumah_sebulan' => 'required',
            'jumlah_pendapatan_per_kapita' => 'required',
            'kategori' => 'required',
            'jumlah_isi_rumah' => 'required',
            'status_miskin' => 'required',
            'status_terkeluar' => 'required',
            'strata' => 'required',
            'poskod' => 'required|min:5|max:5',
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
            'tahun_kelahiran' => 'required',
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
            'jumlah_bantuan' => 'required',
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
