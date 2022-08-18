<?php

namespace App\Http\Controllers;

use App\Models\Info_kampung;
use App\Models\Profil_air;
use Illuminate\Http\Request;

class Senarai_kir_dan_airController extends Controller
{
    public function index()
    {
        $senarai = Profil_air::all();
        $senarai1 = Profil_air::all();


        return view('kt.senarai_kir_air.index', compact('senarai', 'senarai1'));
    }

    public function index1()
    {
        $senarai = Profil_air::all();
        $senarai1 = Profil_air::all();


        return view('kt.senarai_kir_air.index1', compact('senarai', 'senarai1'));
    }

    public function index2()
    {
        $senarai = Profil_air::all();
        $senarai1 = Profil_air::all();
        $kampung = Info_kampung::all();


        return view('kt.senarai_kir_air.index2', compact('senarai', 'senarai1', 'kampung'));
    }
}
