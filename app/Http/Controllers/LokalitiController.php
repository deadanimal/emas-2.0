<?php

namespace App\Http\Controllers;

use App\Models\Lokaliti;
use App\Models\Negeri;
use App\Models\Profil;

class LokalitiController extends Controller
{

    public function index() {

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

        return view('KT.lokaliti.index', compact('negeris'));
    }

    public function index1() {
        $lokaliti = Lokaliti::all();

        return view('KT.lokaliti.index1', compact('lokaliti'));
    }
}
