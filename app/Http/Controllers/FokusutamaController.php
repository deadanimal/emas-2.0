<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFokusutamaRequest;
use App\Http\Requests\UpdateFokusutamaRequest;
use App\Models\Fokusutama;
use Illuminate\Support\Facades\Auth;

class FokusutamaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fokusutama = Fokusutama::all();

        return view('fokusutama.index', compact('fokusutama'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        return view('fokusutama.create', ['user' => $user]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFokusutamaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFokusutamaRequest $request)
    {
        $fokusutama = Fokusutama::create($request->all());
        return redirect()->route('fokusutama.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fokusutama  $fokusutama
     * @return \Illuminate\Http\Response
     */
    public function show(Fokusutama $fokusutama)
    {
        return view('fokusutama.show', compact('fokusutama'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fokusutama  $fokusutama
     * @return \Illuminate\Http\Response
     */
    public function edit(Fokusutama $fokusutama)
    {
        return view('fokusutama.edit', compact('fokusutama'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFokusutamaRequest  $request
     * @param  \App\Models\Fokusutama  $fokusutama
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFokusutamaRequest $request, Fokusutama $fokusutama)
    {
        $fokusutama->update($request->all());
        return redirect()->route('fokusutama.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fokusutama  $fokusutama
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fokusutama $fokusutama)
    {
        $fokusutama->delete();

        return redirect()->route('fokusutama.index')
            ->with('Berjaya', 'Keterangan berjaya dibuang');
    }
}
