<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStrategiRequest;
use App\Http\Requests\UpdateStrategiRequest;
use App\Models\Bidang;
use App\Models\Strategi;
use Illuminate\Support\Facades\Auth;


class StrategiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $strategi = Strategi::all();
        $list= Bidang::all();


        return view('strategi.index', compact('strategi', 'list'));
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
        return view('strategi.create', compact('user', 'list'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStrategiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStrategiRequest $request)
    {
        $strategi = Strategi::create($request->all());
        return redirect()->route('strategi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Strategi  $strategi
     * @return \Illuminate\Http\Response
     */
    public function show(Strategi $strategi)
    {
        return view('strategi.show', compact('strategi'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Strategi  $strategi
     * @return \Illuminate\Http\Response
     */
    public function edit(Strategi $strategi)
    {
        $list= Bidang::all();

        return view('strategi.edit', compact('strategi', 'list'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStrategiRequest  $request
     * @param  \App\Models\Strategi  $strategi
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStrategiRequest $request, Strategi $strategi)
    {
        $strategi->update($request->all());
        return redirect()->route('strategi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Strategi  $strategi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Strategi $strategi)
    {
        $strategi->delete();

        return redirect()->route('strategi.index')
            ->with('Berjaya', 'Keterangan berjaya dibuang');
    }
}
