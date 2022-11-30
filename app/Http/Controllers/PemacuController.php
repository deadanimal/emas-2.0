<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePemacuRequest;
use App\Http\Requests\UpdatePemacuRequest;
use App\Models\Bab;
use App\Models\Fokusutama;
use App\Models\Pemacu;
use App\Models\Perkarautama;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;



class PemacuController extends Controller
{


    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $pemacus = Pemacu::all();
        $list = Bab::all();
        $fokus = Fokusutama::all();
        $perkara = Perkarautama::all();



        return view('ppd.pemacu.index', compact('pemacus', 'list', 'fokus', 'perkara'));
    }


    public function create() {
        $user = Auth::user();
        $babs = Bab::where('organisasi_id', $user->organisasi_id)->get();
        $fokuss = Fokusutama::all();
        $perkaras = Perkarautama::all();
        return view('ppd.pemacu.create', compact('user', 'babs', 'fokuss', 'perkaras'));
    }

    public function store(StorePemacuRequest $request) {
        $user = Auth::user();
        $pemacu = Pemacu::create($request->all());
        $pemacu->organisasi_id = $user->organisasi_id;
        $pemacu->save();
        return redirect()->route('pemacu.index');
    }

    public function show(Pemacu $pemacu) {
        return view('ppd.pemacu.show', compact('pemacu'));
    }

    public function edit(Pemacu $pemacu) {
        $user = Auth::user();

        $babs = Bab::all();
        $fokuss = Fokusutama::all();
        $perkaras = Perkarautama::all();

        return view('ppd.pemacu.edit', compact('pemacu', 'babs', 'fokuss', 'perkaras'));
    }

    public function update(UpdatePemacuRequest $request, Pemacu $pemacu) {
        $pemacu->update($request->all());
        return redirect()->route('pemacu.index');
    }

    public function destroy(Pemacu $pemacu) {
        $pemacu->delete();

        return redirect()->route('pemacu.index')
            ->with('Berjaya', 'Keterangan Pemacu Perubahan berjaya dibuang');
    }

    public function searchPemacu(Request $request) {
        $pemacu = Pemacu::where('id', '!=', 'null');

        if ($request->result[0] != 'null') {
            $pemacu->where('fokus_id', $request->result[0]);
        }
        if ($request->result[1] != 'null') {
            $pemacu->where('perkara_id', $request->result[1]);
        }
        if ($request->result[2] != 'null') {
            $pemacu->where('bab_id', $request->result[2]);
        }


        return response()->json($pemacu->get());
    }
}
