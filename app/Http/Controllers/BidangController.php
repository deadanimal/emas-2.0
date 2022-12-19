<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBidangRequest;
use App\Http\Requests\UpdateBidangRequest;
use App\Models\Bab;
use App\Models\Bidang;
use App\Models\Fokusutama;
use App\Models\Pemangkindasar;
use App\Models\Perkarautama;
use Illuminate\Support\Facades\Auth;

class BidangController extends Controller
{


    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $bidangs = Bidang::all();
        $list = Bab::all();

        return view('ppd.bidang.index', compact('bidangs', 'list'));
    }


    public function create() {
        $user = Auth::user();

        $babs = Bab::all();
        $fokuss = Fokusutama::all();
        $temas = Pemangkindasar::all();
        $perkaras = Perkarautama::all();


        return view('ppd.bidang.create', compact('user', 'babs', 'fokuss', 'temas', 'perkaras'));
    }

    public function store(StoreBidangRequest $request) {
        $bidang = Bidang::create($request->validated());
        return redirect()->route('bidang.index');
    }


    public function show(Bidang $bidang) {
        return view('ppd.bidang.show', compact('bidang'));
    }


    public function edit(Bidang $bidang) {
        $babs = Bab::all();
        $fokuss = Fokusutama::all();
        $temas = Pemangkindasar::all();
        $perkaras = Perkarautama::all();

        return view('ppd.bidang.edit', compact('bidang', 'babs', 'fokuss', 'temas', 'perkaras'));
    }


    public function update(UpdateBidangRequest $request, Bidang $bidang) {
        $bidang->update($request->all());
        return redirect()->route('bidang.index');
    }


    public function destroy(Bidang $bidang) {
        $bidang->delete();

        return redirect()->route('bidang.index')
            ->with('Berjaya', 'Keterangan berjaya dibuang');
    }
}
