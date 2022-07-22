<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStrategiRequest;
use App\Http\Requests\UpdateStrategiRequest;
use App\Models\Bidang;
use App\Models\Strategi;
use App\Models\Fokusutama;
use App\Models\Pemangkindasar;
use App\Models\Perkarautama;
use App\Models\Bab;
use Illuminate\Support\Facades\Auth;


class StrategiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $strategis = Strategi::all();
        $list = Bidang::all();


        return view('ppd.strategi.index', compact('strategis', 'list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();

        $list = Bidang::all();
        $fokus = Fokusutama::all();
        $perkara = Perkarautama::all();
        $pemangkin = Pemangkindasar::all();
        $bab = Bab::all();
        return view('ppd.strategi.create', compact('user', 'list', 'bab', 'perkara', 'pemangkin', 'fokus'));
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
        return view('ppd.strategi.show', compact('strategi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Strategi  $strategi
     * @return \Illuminate\Http\Response
     */
    public function edit(Strategi $strategi)
    {
        $list = Bidang::all();
        $fokus = Fokusutama::all();
        $perkara = Perkarautama::all();
        $pemangkin = Pemangkindasar::all();
        $bab = Bab::all();

        return view('ppd.strategi.edit', compact('strategi', 'list', 'bab', 'perkara', 'pemangkin', 'fokus'));
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
