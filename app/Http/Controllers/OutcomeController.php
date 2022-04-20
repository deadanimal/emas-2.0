<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOutcomeRequest;
use App\Http\Requests\UpdateOutcomeRequest;
use App\Models\Bidang;
use App\Models\Outcome;
use Illuminate\Support\Facades\Auth;


class OutcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $outcome = Outcome::all();

        return view('outcome.index', compact('outcome'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();

        $list= Bidang::all();
        return view('outcome.create', compact('user', 'list'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOutcomeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOutcomeRequest $request)
    {
        $outcome = Outcome::create($request->all());
        return redirect()->route('outcome.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Outcome  $outcome
     * @return \Illuminate\Http\Response
     */
    public function show(Outcome $outcome)
    {
        return view('outcome.show', compact('outcome', 'list'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Outcome  $outcome
     * @return \Illuminate\Http\Response
     */
    public function edit(Outcome $outcome)
    {

        $list= Bidang::all();

        return view('outcome.edit', compact('outcome', 'list'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOutcomeRequest  $request
     * @param  \App\Models\Outcome  $outcome
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOutcomeRequest $request, Outcome $outcome)
    {
        $outcome->update($request->all());
        return redirect()->route('outcome.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Outcome  $outcome
     * @return \Illuminate\Http\Response
     */
    public function destroy(Outcome $outcome)
    {
        $outcome->delete();

        return redirect()->route('outcome.index')
            ->with('Berjaya', 'Keterangan berjaya dibuang');
    }
}
