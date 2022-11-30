<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStrategiRequest;
use App\Http\Requests\UpdateStrategiRequest;
use App\Models\Bidang;
use App\Models\Strategi;
use App\Models\Fokusutama;
use App\Models\Pemangkindasar;
use App\Models\Perkarautama;
use App\Models\Bab;
use Illuminate\Support\Facades\Auth;


class StrategiController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }


    public function index() {
        $strategis = Strategi::all();
        $list = Bidang::all();
        return view('ppd.strategi.index', 
            compact('strategis', 'list'));
    }


    public function create() {
        $user = Auth::user();

        $list = Bidang::all();
        $fokuss = Fokusutama::all();
        $perkaras = Perkarautama::all();
        $pemangkin = Pemangkindasar::all();
        $bab = Bab::all();
        return view('ppd.strategi.create', 
            compact('user', 'list', 'bab', 'perkaras', 'pemangkin', 'fokuss'));
    }

    public function store(StoreStrategiRequest $request) {
        $strategi = Strategi::create($request->all());
        return redirect()->route('strategi.index');
    }

    public function show(Strategi $strategi) {
        return view('ppd.strategi.show', compact('strategi'));
    }

    public function edit(Strategi $strategi) {
        $list = Bidang::all();
        $fokuss = Fokusutama::all();
        $perkaras = Perkarautama::all();
        $pemangkin = Pemangkindasar::all();
        $bab = Bab::all();
        return view('ppd.strategi.edit', 
            compact('strategi', 'list', 'bab', 'perkaras', 'pemangkin', 'fokuss'));
    }

    public function update(UpdateStrategiRequest $request, Strategi $strategi) {
        $strategi->update($request->all());
        return redirect()->route('strategi.index');
    }

    public function destroy(Strategi $strategi) {
        $strategi->delete();
        return redirect()->route('strategi.index')
            ->with('Berjaya', 'Keterangan berjaya dibuang');
    }
}
