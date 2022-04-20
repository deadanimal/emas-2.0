<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePemangkindasarRequest;
use App\Http\Requests\UpdatePemangkindasarRequest;
use App\Models\Pemangkindasar;
use Illuminate\Support\Facades\Auth;


class PemangkindasarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pemangkindasar = Pemangkindasar::all();

        return view('pemangkin.index', compact('pemangkindasar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();

        // $list= Tema::all();


        // $list= Kategori::all();
        return view('pemangkin.create', compact('user',));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePemangkindasarRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePemangkindasarRequest $request)
    {
        $pemangkindasar = Pemangkindasar::create($request->all());
        return redirect()->route('pemangkin.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pemangkindasar  $pemangkindasar
     * @return \Illuminate\Http\Response
     */
    public function show(Pemangkindasar $pemangkindasar)
    {
        return view('pemangkin.show', compact('pemangkindasar'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pemangkindasar  $pemangkindasar
     * @return \Illuminate\Http\Response
     */
    public function edit(Pemangkindasar $pemangkindasar)
    {

        
        return view('pemangkin.edit', compact('pemangkindasar'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePemangkindasarRequest  $request
     * @param  \App\Models\Pemangkindasar  $pemangkindasar
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePemangkindasarRequest $request, Pemangkindasar $pemangkindasar)
    {
        $pemangkindasar->update($request->all());
        return redirect()->route('pemangkin.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pemangkindasar  $pemangkindasar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pemangkindasar $pemangkindasar)
    {
        $pemangkindasar->delete();

        return redirect()->route('pemangkin.index')
            ->with('Berjaya', 'Keterangan berjaya dibuang');
    }
}
