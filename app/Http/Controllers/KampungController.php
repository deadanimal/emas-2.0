<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKampungRequest;
use App\Http\Requests\UpdateKampungRequest;
use App\Models\Daerah;
use App\Models\Kampung;
use App\Models\Negeri;

class KampungController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $daerah = Daerah::all();
        $negeri = Negeri::all();
        return view('KT.bantuan.create2', compact('negeri', 'daerah'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreKampungRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKampungRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kampung  $kampung
     * @return \Illuminate\Http\Response
     */
    public function show(Kampung $kampung)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kampung  $kampung
     * @return \Illuminate\Http\Response
     */
    public function edit(Kampung $kampung)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKampungRequest  $request
     * @param  \App\Models\Kampung  $kampung
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKampungRequest $request, Kampung $kampung)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kampung  $kampung
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kampung $kampung)
    {
        //
    }
}
