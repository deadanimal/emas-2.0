<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePerkarautamaRequest;
use App\Http\Requests\UpdatePerkarautamaRequest;
use App\Models\Fokusutama;
use App\Models\Perkarautama;
use Illuminate\Support\Facades\Auth;


class PerkarautamaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $perkarautama = Perkarautama::all();

        $list= Fokusutama::all();

        return view('perkarautama.index', compact('perkarautama', 'list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();


        $list= Fokusutama::all();

        return view('perkarautama.create', compact("user", "list"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePerkarautamaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePerkarautamaRequest $request)
    {
        // dd($request);
        $perkarautama = Perkarautama::create($request->all());
        return redirect()->route('perkarautama.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Perkarautama  $perkarautama
     * @return \Illuminate\Http\Response
     */
    public function show(Perkarautama $perkarautama)
    {
        return view('perkarautama.show', compact('perkarautama'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Perkarautama  $perkarautama
     * @return \Illuminate\Http\Response
     */
    public function edit(Perkarautama $perkarautama)
    {
        $user = Auth::user();

        $list= Fokusutama::all();

        return view('perkarautama.edit', compact('perkarautama', 'list'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePerkarautamaRequest  $request
     * @param  \App\Models\Perkarautama  $perkarautama
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePerkarautamaRequest $request, Perkarautama $perkarautama)
    {
        $perkarautama->update($request->all());
        return redirect()->route('perkarautama.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Perkarautama  $perkarautama
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perkarautama $perkarautama)
    {
        $perkarautama->delete();

        return redirect()->route('perkarautama.index')
            ->with('Berjaya', 'Berjaya dibuang');
    }
}
