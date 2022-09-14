<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePemacuRequest;
use App\Http\Requests\UpdatePemacuRequest;
use App\Models\Bab;
use App\Models\Fokusutama;
use App\Models\Pemacu;
use App\Models\Perkarautama;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;



class PemacuController extends Controller
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
        $pemacus = Pemacu::all();
        $list = Bab::all();
        $fokus = Fokusutama::all();
        $perkara = Perkarautama::all();



        return view('ppd.pemacu.index', compact('pemacus', 'list', 'fokus', 'perkara'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();

        $list = Bab::all();
        $fokuss = Fokusutama::all();
        $perkaras = Perkarautama::all();
        return view('ppd.pemacu.create', compact('user', 'list', 'fokuss', 'perkaras'));
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
        return view('ppd.pemacu.show', compact('pemacu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pemacu  $pemacu
     * @return \Illuminate\Http\Response
     */
    public function edit(Pemacu $pemacu)
    {
        $user = Auth::user();

        $list = Bab::all();
        $fokus = Fokusutama::all();
        $perkara = Perkarautama::all();

        return view('ppd.pemacu.edit', compact('pemacu', 'list', 'fokus', 'perkara'));
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

    public function searchPemacu(Request $request)
    {
        $pemacu = Pemacu::where('id', '!=', 'null');

        if ($request->result[0] != 'null') {
            $pemacu->where('fokus_id', $request->result[0]);
        }
        if ($request->result[1] != 'null') {
            $pemacu->where('perkara_id', $request->result[1]);
        }
        if ($request->result[2] != 'null') {
            $pemacu->where('bab_id', $request->result[2]);
        }


        return response()->json($pemacu->get());
    }
}
