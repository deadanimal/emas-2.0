<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePemacuRequest;
use App\Http\Requests\UpdatePemacuRequest;
use App\Models\Bab;
use App\Models\Pemacu;
use Illuminate\Support\Facades\Auth;


class PemacuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pemacu = Pemacu::all();

        return view('pemacu.index', compact('pemacu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();

        $list= Bab::all();
        return view('pemacu.create', compact('user', 'list'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePemacuRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePemacuRequest $request)
    {
        $pemacu = Pemacu::create($request->all());
        return redirect()->route('pemacu.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pemacu  $pemacu
     * @return \Illuminate\Http\Response
     */
    public function show(Pemacu $pemacu)
    {
        return view('pemacu.show', compact('pemacu'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pemacu  $pemacu
     * @return \Illuminate\Http\Response
     */
    public function edit(Pemacu $pemacu)
    {
        $list= Pemacu::all();

        return view('pemacu.edit', compact('pemacu', 'list'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePemacuRequest  $request
     * @param  \App\Models\Pemacu  $pemacu
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePemacuRequest $request, Pemacu $pemacu)
    {
        $pemacu->update($request->all());
        return redirect()->route('pemacu.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pemacu  $pemacu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pemacu $pemacu)
    {
        $pemacu->delete();

        return redirect()->route('pemacu.index')
            ->with('Berjaya', 'Keterangan Pemacu Perubahan berjaya dibuang');
    }
}
