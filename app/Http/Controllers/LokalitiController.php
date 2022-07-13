<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLokalitiRequest;
use App\Http\Requests\UpdateLokalitiRequest;
use App\Models\Lokaliti;

class LokalitiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lokaliti = Lokaliti::all();

        return view('bmt.lokaliti.index', compact('lokaliti'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLokalitiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLokalitiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lokaliti  $lokaliti
     * @return \Illuminate\Http\Response
     */
    public function show(Lokaliti $lokaliti)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lokaliti  $lokaliti
     * @return \Illuminate\Http\Response
     */
    public function edit(Lokaliti $lokaliti)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLokalitiRequest  $request
     * @param  \App\Models\Lokaliti  $lokaliti
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLokalitiRequest $request, Lokaliti $lokaliti)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lokaliti  $lokaliti
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lokaliti $lokaliti)
    {
        //
    }
}
