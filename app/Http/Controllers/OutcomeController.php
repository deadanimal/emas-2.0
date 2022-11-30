<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOutcomeRequest;
use App\Http\Requests\UpdateOutcomeRequest;
use App\Models\Bidang;
use App\Models\Fokusutama;
use App\Models\Outcome;
use App\Models\Pemangkindasar;
use App\Models\Perkarautama;
use Illuminate\Support\Facades\Auth;


class OutcomeController extends Controller
{


    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $outcomes = Outcome::all();
        $list = Bidang::all();


        return view('ppd.outcome.index', compact('outcomes', 'list'));
    }


    public function create() {
        $user = Auth::user();

        $bidangs = Bidang::all();
        $fokus = Fokusutama::all();
        $pemangkin = Pemangkindasar::all();
        $perkaras = Perkarautama::all();
        return view('ppd.outcome.create', compact('user', 'bidangs', 'pemangkin', 'fokus', 'perkaras'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOutcomeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOutcomeRequest $request) {
        $outcome = Outcome::create($request->all());
        return redirect()->route('outcome.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Outcome  $outcome
     * @return \Illuminate\Http\Response
     */
    public function show(Outcome $outcome) {
        return view('ppd.outcome.show', compact('outcome', 'list'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Outcome  $outcome
     * @return \Illuminate\Http\Response
     */
    public function edit(Outcome $outcome) {

        $bidangs = Bidang::all();
        $fokus = Fokusutama::all();
        $pemangkin = Pemangkindasar::all();
        $perkaras = Perkarautama::all();

        return view('ppd.outcome.edit', compact('outcome', 'bidangs', 'pemangkin', 'fokus', 'perkaras'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOutcomeRequest  $request
     * @param  \App\Models\Outcome  $outcome
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOutcomeRequest $request, Outcome $outcome) {
        $outcome->update($request->all());
        return redirect()->route('outcome.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Outcome  $outcome
     * @return \Illuminate\Http\Response
     */
    public function destroy(Outcome $outcome) {
        $outcome->delete();

        return redirect()->route('outcome.index')
            ->with('Berjaya', 'Keterangan berjaya dibuang');
    }
}
