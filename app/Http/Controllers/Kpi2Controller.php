<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKpi2Request;
use App\Http\Requests\UpdateKpi2Request;
use App\Models\Key;
use App\Models\Kpi2;
use App\Models\National;
use App\Models\Sub;
use App\Models\Thrust;
use Illuminate\Support\Facades\Auth;


class Kpi2Controller extends Controller
{

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $kpis = Kpi2::where('user_id', Auth::user()->id)->get();
        $list = Sub::all();

        return view('mpb.kpi2.index', compact('kpis', 'list'));
    }


    public function create() {
        $user = Auth::user();

        $kpi2 = Kpi2::where('user_id', Auth::user()->id)->get();

        $thrust = Thrust::where('user_id', Auth::user()->id)->get();
        $national = National::where('user_id', Auth::user()->id)->get();
        $key = Key::where('user_id', Auth::user()->id)->get();
        $sub = Sub::where('user_id', Auth::user()->id)->get();

        return view('mpb.kpi2.create', compact('user', 'kpi2', 'thrust', 'key', 'sub', 'national'));
    }

    public function store(StoreKpi2Request $request) {
        $kpi2 = Kpi2::create($request->validated());

        return redirect()->route('kpi2.index');
    }

    public function show(Kpi2 $kpi2) {
        //
    }


    public function edit(Kpi2 $kpi2) {
        // dd($kpi2);

        $thrust = Thrust::where('user_id', Auth::user()->id)->get();
        $national = National::where('user_id', Auth::user()->id)->get();
        $key = Key::where('user_id', Auth::user()->id)->get();
        $sub = Sub::where('user_id', Auth::user()->id)->get();

        return view('mpb.kpi2.edit', compact('kpi2', 'thrust', 'key', 'sub', 'national'));
    }

    public function update(UpdateKpi2Request $request, Kpi2 $kpi2) {

        $kpi2->update($request->all());

        return redirect()->route('kpi2.index');
    }


    public function destroy(Kpi2 $kpi2) {
        $kpi2->delete();

        return redirect()->route('kpi2.index')
            ->with('Berjaya', 'Keterangan berjaya dibuang');
    }
}
