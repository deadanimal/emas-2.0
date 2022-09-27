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
        $kpis = Kpi2::where('user_id', Auth::user()->id)->get();
        $list = Sub::all();

        return view('mpb.kpi2.index', compact('kpis', 'list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();

        $kpi2 = Kpi2::where('user_id', Auth::user()->id)->get();

        $thrust = Thrust::where('user_id', Auth::user()->id)->get();
        $national = National::where('user_id', Auth::user()->id)->get();
        $key = Key::where('user_id', Auth::user()->id)->get();
        $sub = Sub::where('user_id', Auth::user()->id)->get();

        return view('mpb.kpi2.create', compact('user', 'kpi2', 'thrust', 'key', 'sub', 'national'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreKpi2Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKpi2Request $request)
    {
        $kpi2 = Kpi2::create($request->validated());

        return redirect()->route('kpi2.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kpi2  $kpi2
     * @return \Illuminate\Http\Response
     */
    public function show(Kpi2 $kpi2)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kpi2  $kpi2
     * @return \Illuminate\Http\Response
     */
    public function edit(Kpi2 $kpi2)
    {
        // dd($kpi2);

        $thrust = Thrust::where('user_id', Auth::user()->id)->get();
        $national = National::where('user_id', Auth::user()->id)->get();
        $key = Key::where('user_id', Auth::user()->id)->get();
        $sub = Sub::where('user_id', Auth::user()->id)->get();

        return view('mpb.kpi2.edit', compact('kpi2', 'thrust', 'key', 'sub', 'national'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKpi2Request  $request
     * @param  \App\Models\Kpi2  $kpi2
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKpi2Request $request, Kpi2 $kpi2)
    {
        $kpi2->update($request->all());
        return redirect()->route('kpi2.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kpi2  $kpi2
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kpi2 $kpi2)
    {
        $kpi2->delete();

        return redirect()->route('kpi2.index')
            ->with('Berjaya', 'Keterangan berjaya dibuang');
    }
}
