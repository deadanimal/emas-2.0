<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTindakanRequest;
use App\Http\Requests\UpdateTindakanRequest;
use App\Models\Inisiatif;
use App\Models\Tindakan;
use Illuminate\Support\Facades\Auth;


class TindakanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tindakans = Tindakan::all();
        $list= Inisiatif::all();

        return view('tindakan.index', compact('tindakans', 'list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();

        $list= Inisiatif::all();
        return view('tindakan.create', compact('user', 'list'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTindakanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTindakanRequest $request)
    {
        $tindakan = Tindakan::create($request->all());
        return redirect()->route('tindakan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tindakan  $tindakan
     * @return \Illuminate\Http\Response
     */
    public function show(Tindakan $tindakan)
    {
        return view('tindakan.show', compact('tindakan'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tindakan  $tindakan
     * @return \Illuminate\Http\Response
     */
    public function edit(Tindakan $tindakan)
    {
        $list= Inisiatif::all();
        return view('tindakan.edit', compact('tindakan', 'list'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTindakanRequest  $request
     * @param  \App\Models\Tindakan  $tindakan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTindakanRequest $request, Tindakan $tindakan)
    {
        $tindakan->update($request->all());
        return redirect()->route('tindakan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tindakan  $tindakan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tindakan $tindakan)
    {
        $tindakan->delete();

        return redirect()->route('tindakan.index')
            ->with('Berjaya', 'Keterangan berjaya dibuang');
    }
}
