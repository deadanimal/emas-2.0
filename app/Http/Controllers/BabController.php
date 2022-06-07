<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBabRequest;
use App\Http\Requests\UpdateBabRequest;
use App\Models\Bab;
use App\Models\Pemangkindasar;
use Illuminate\Support\Facades\Auth;


class BabController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $babs = Bab::all();
        $list= Pemangkindasar::all();


        return view('bab.index', compact('babs', 'list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();

        $list= Pemangkindasar::all();
        return view('bab.create', compact('user', 'list'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBabRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBabRequest $request)
    {
        $bab = Bab::create($request->all());
        return redirect()->route('bab.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bab  $bab
     * @return \Illuminate\Http\Response
     */
    public function show(Bab $bab)
    {
        return view('bab.show', compact('bab'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bab  $bab
     * @return \Illuminate\Http\Response
     */
    public function edit(Bab $bab)
    {
        $list= Pemangkindasar::all();

        return view('bab.edit', compact('bab', 'list'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBabRequest  $request
     * @param  \App\Models\Bab  $bab
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBabRequest $request, Bab $bab)
    {
        $bab->update($request->all());
        return redirect()->route('bab.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bab  $bab
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bab $bab)
    {
        $bab->delete();

        return redirect()->route('bab.index')
            ->with('Berjaya', 'Keterangan berjaya dibuang');
    }
}
