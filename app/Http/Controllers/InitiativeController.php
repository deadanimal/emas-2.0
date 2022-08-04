<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInitiativeRequest;
use App\Http\Requests\UpdateInitiativeRequest;
use App\Models\Cluster;
use App\Models\Initiative;
use Illuminate\Support\Facades\Auth;


class InitiativeController extends Controller
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
        $initiatives = Initiative::all();
        $cluster = Cluster::all();
        return view('md.initiative.index', compact('initiatives', 'cluster'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        $cluster = Cluster::all();
        return view('md.initiative.create', compact('user', 'cluster'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreInitiativeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInitiativeRequest $request)
    {
        $initiative = Initiative::create($request->all());
        return redirect()->route('initiative.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Initiative  $initiative
     * @return \Illuminate\Http\Response
     */
    public function show(Initiative $initiative)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Initiative  $initiative
     * @return \Illuminate\Http\Response
     */
    public function edit(Initiative $initiative)
    {

        // dd($initiative);
        // $initiative = Initiative::all();
        $cluster = Cluster::all();
        return view('md.initiative.edit', compact('cluster', 'initiative'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInitiativeRequest  $request
     * @param  \App\Models\Initiative  $initiative
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInitiativeRequest $request, Initiative $initiative)
    {
        $initiative->update($request->all());
        return redirect()->route('initiative.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Initiative  $initiative
     * @return \Illuminate\Http\Response
     */
    public function destroy(Initiative $initiative)
    {
        $initiative->delete();
        return redirect()->route('initiative.index')
            ->with('Berjaya', 'Keterangan berjaya dibuang');
    }
}
