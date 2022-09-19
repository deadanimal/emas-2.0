<?php

namespace App\Http\Controllers;

use App\Models\Info_kampung;
use App\Models\Kampung;
use App\Models\Negeri;
use App\Models\Profil;
use Illuminate\Http\Request;
use DataTables;



class Senarai_kir_dan_airController extends Controller
{
    public function index()
    {
        $negeris = Negeri::all();

        foreach ($negeris as $negeri) {
            $negeri['jumlah_kir'] = Profil::where([
                'negeri_id' => $negeri->id,
                'kategori' => 'KIR',
            ])->count();
            $negeri['jumlah_air'] = Profil::where([
                'negeri_id' => $negeri->id,
                'kategori' => 'AIR',
            ])->count();
        }

        return view('KT.senarai_kir_air.index', compact('negeris'));
    }

    public function index1()
    {
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
            }
        }


        return view('KT.senarai_kir_air.index1', compact('negeris'));
    }

    public function index2()
    {
        $senarai = Profil::all();
        $senarai1 = Profil::all();
        $kampung = Kampung::all();

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

        return view('KT.senarai_kir_air.index2', compact('senarai', 'senarai1', 'kampung', 'negeris'));
    }

    // public function senarai(Request $request)
    // {
    //     if ($request->ajax()) {
    //         $data = Negeri::select('id', 'name')->get();

    //         return Datatables::of($data)->addIndexColumn()
    //             ->addColumn('action', function ($row) {
    //                 $btn = '<a href="javascript:void(0)" class="btn btn-primary btn-sm">View</a>';
    //                 return $btn;
    //             })
    //             ->rawColumns(['action'])
    //             ->make(true);
    //     }

    //     return view('negeris');
    // }
}
