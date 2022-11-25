<?php

namespace App\Http\Controllers;

use App\Models\Daerah;
use App\Models\Kampung;
use App\Models\Negeri;
use App\Models\Profil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SenaraiInformasiController extends Controller
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

        $senarai = Profil::all();
        $senarai1 = Profil::all();
        $kampungs = Kampung::all();
        $daerahs = Daerah::all();

        $negeris = Negeri::with('daerah')->get();

        foreach ($negeris as $negeri) {
            foreach ($negeri->daerah as $d) {
                $d['jumlah_kir'] = Profil::where([
                    'negeri_id' => $negeri->id,
                    'daerah_id' => $d->id,
                    'kategori' => 'KIR',
                ])->count();
                $d['jumlah_air'] = Profil::where([
                    'negeri_id' => $negeri->id,
                    'daerah_id' => $d->id,
                    'kategori' => 'AIR',
                ])->count();

                $d['kampung'] = Kampung::where('daerah_id', $d->id)->get();
            }
        }


        return view(
            'KT.senarai_informasi.index',
            compact('senarai', 'senarai1', 'kampungs', 'negeris', 'daerahs')
        );
    }

    public function index1()
    {
        $senarai = Profil::all();
        $senarai1 = Profil::all();
        $kampungs = Kampung::all();
        $daerahs = Daerah::all();

        $negeris = Negeri::with('daerah')->get();

        foreach ($negeris as $negeri) {
            foreach ($negeri->daerah as $d) {
                $d['jumlah_kir'] = Profil::where([
                    'negeri_id' => $negeri->id,
                    'daerah_id' => $d->id,
                    'kategori' => 'KIR',
                ])->count();
                $d['jumlah_air'] = Profil::where([
                    'negeri_id' => $negeri->id,
                    'daerah_id' => $d->id,
                    'kategori' => 'AIR',
                ])->count();

                $d['kampung'] = Kampung::where('daerah_id', $d->id)->get();
            }
        }

        return view('KT.senarai_informasi.index1', compact('senarai', 'senarai1', 'kampungs', 'negeris', 'daerahs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
