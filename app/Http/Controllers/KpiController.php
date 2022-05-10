<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKpiRequest;
use App\Http\Requests\UpdateKpiRequest;
use App\Models\Kpi;
use App\Models\Outcome;
use Illuminate\Support\Facades\Auth;


class KpiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kpi = Kpi::all();
        $list= Outcome::all();


        return view('kpi.index', compact('kpi', 'list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();

        $list= Outcome::all();
        return view('kpi.create', compact('user', 'list'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreKpiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKpiRequest $request)
    {
        $kpi = Kpi::create($request->all());
        return redirect()->route('kpi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kpi  $kpi
     * @return \Illuminate\Http\Response
     */
    public function show(Kpi $kpi)
    {
        return view('kpi.show', compact('kpi'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kpi  $kpi
     * @return \Illuminate\Http\Response
     */
    public function edit(Kpi $kpi)
    {
        // $kpi = Kpi::find($kpi);
        $list= Outcome::all();

        return view('kpi.edit', compact('kpi', 'list'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKpiRequest  $request
     * @param  \App\Models\Kpi  $kpi
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKpiRequest $request, Kpi $kpi)
    {
        $kpi->update($request->all());
        return redirect()->route('kpi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kpi  $kpi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kpi $kpi)
    {
        $kpi->delete();

        return redirect()->route('kpi.index')
            ->with('Berjaya', 'Keterangan berjaya dibuang');
    }
}
