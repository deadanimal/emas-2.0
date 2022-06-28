<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBabRequest;
use App\Http\Requests\UpdateBabRequest;
use App\Models\Bab;
use App\Models\Fokusutama;
use App\Models\Pemangkindasar;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;



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
        $fokus= Fokusutama::all();



        return view('bab.index', compact('babs', 'list', 'fokus'));

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
        $fokus= Fokusutama::all();
        return view('bab.create', compact('user', 'list', 'fokus'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBabRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBabRequest $request)
    {
        $bab = Bab::create($request->validated());
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

        $fokus= Fokusutama::all();

        //cara baru dapatkan ID
        $bab = Bab::with('pemangkin:id')->find($bab->id);

        //cara lama dapatkan ID
        // $bab = Bab::with(['pemangkin'=>function($query){
        //     $query->select('id');
        // }])->find($bab->id);

        // dd($bab);

        return view('bab.edit', compact('bab', 'list', 'fokus'));

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

    public function searchBab(Request $request)
    {
        $bab = Bab::where('id', '!=', 'null');

        if ($request->result[0] != 'null') {
            $bab->where('fokus_id', $request->result[0]);
        }
        if ($request->result[1] != 'null') {
            $bab->where('pemangkin_id', $request->result[1]);
        }


        return response()->json($bab->get());
    }
}
