<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKpi2Request;
use App\Http\Requests\UpdateKpi2Request;
use App\Models\Kpi2;
use App\Models\Sub;
use Illuminate\Support\Facades\Auth;


class Kpi2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kpis = Kpi2::all();
        $list= Sub::all();

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

        $kpi2 = Kpi2::all();

        // $list= Pemangkindasar::all();
        return view('mpb.kpi2.create', compact('user', 'kpi2'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreKpi2Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKpi2Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kpi2  $kpi2
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kpi2 $kpi2)
    {
        //
    }
}
