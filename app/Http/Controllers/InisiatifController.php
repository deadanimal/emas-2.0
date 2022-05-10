<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInisiatifRequest;
use App\Http\Requests\UpdateInisiatifRequest;
use App\Models\Inisiatif;
use App\Models\Strategi;
use Illuminate\Support\Facades\Auth;


class InisiatifController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inisiatif = Inisiatif::all();
        $list= Strategi::all();

        return view('inisiatif.index', compact('inisiatif', 'list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();

        $list= Strategi::all();
        return view('inisiatif.create', compact('user', 'list'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreInisiatifRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInisiatifRequest $request)
    {
        $inisiatif = Inisiatif::create($request->all());
        return redirect()->route('inisiatif.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inisiatif  $inisiatif
     * @return \Illuminate\Http\Response
     */
    public function show(Inisiatif $inisiatif)
    {
        return view('inisiatif.show', compact('inisiatif'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inisiatif  $inisiatif
     * @return \Illuminate\Http\Response
     */
    public function edit(Inisiatif $inisiatif)
    {
        $list= Strategi::all();

        return view('inisiatif.edit', compact('inisiatif', 'list'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInisiatifRequest  $request
     * @param  \App\Models\Inisiatif  $inisiatif
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInisiatifRequest $request, Inisiatif $inisiatif)
    {
        $inisiatif->update($request->all());
        return redirect()->route('inisiatif.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inisiatif  $inisiatif
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inisiatif $inisiatif)
    {
        $inisiatif->delete();

        return redirect()->route('inisiatif.index')
            ->with('Berjaya', 'Keterangan berjaya dibuang');
    }
}
