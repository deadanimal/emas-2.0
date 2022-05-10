<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSdgRequest;
use App\Http\Requests\UpdateSdgRequest;
use App\Models\Pemangkindasar;
use App\Models\Sdg;
use Illuminate\Support\Facades\Auth;


class SdgController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sdg = Sdg::all();
        $list= Pemangkindasar::all();

        return view('sdg.index', compact('sdg', 'list'));
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
        return view('sdg.create', compact('user', 'list'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSdgRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSdgRequest $request)
    {
        $sdg = Sdg::create($request->all());
        return redirect()->route('sdg.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sdg  $sdg
     * @return \Illuminate\Http\Response
     */
    public function show(Sdg $sdg)
    {
        return view('sdg.show', compact('sdg'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sdg  $sdg
     * @return \Illuminate\Http\Response
     */
    public function edit(Sdg $sdg)
    {
        $list= Pemangkindasar::all();

        return view('sdg.edit', compact('sdg', 'list'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSdgRequest  $request
     * @param  \App\Models\Sdg  $sdg
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSdgRequest $request, Sdg $sdg)
    {
        $sdg->update($request->all());
        return redirect()->route('sdg.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sdg  $sdg
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sdg $sdg)
    {
        $sdg->delete();

        return redirect()->route('sdg.index')
            ->with('Berjaya', 'Keterangan berjaya dibuang');
    }
}
