<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBabRequest;
use App\Http\Requests\UpdateBabRequest;
use App\Models\Bab;
use App\Models\Fokusutama;
use App\Models\Organisasi;
use App\Models\Pemangkindasar;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;



class BabController extends Controller
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
        $babs = Bab::all();

        $list = Pemangkindasar::all();
        $fokus = Fokusutama::all();



        return view('ppd.bab.index', compact('babs', 'list', 'fokus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        $users = User::permission('PPD - Penyelaras')->get();

        $orgs = Organisasi::where('jenis', 'bahagian')->get();
        $temas = Pemangkindasar::all();
        $fokuss = Fokusutama::all();
        return view('ppd.bab.create', compact('user', 'temas', 'fokuss', 'users', 'organisasis'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBabRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBabRequest $request)
    {
        $user = Auth::user();
        $bab = Bab::create($request->validated());
        $bab->organisasi_id = $user->organisasi_id;
        $bab->save();
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
        return view('ppd.bab.show', compact('bab'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bab  $bab
     * @return \Illuminate\Http\Response
     */
    public function edit(Bab $bab)
    {
        $temas = Pemangkindasar::all();

        $fokuss = Fokusutama::all();
        $users = User::permission('PPD - Penyelaras')->get();


        //cara baru dapatkan ID
        $bab = Bab::with('pemangkin:id')->find($bab->id);
        $orgs = Organisasi::where('jenis', 'bahagian')->get();

        //cara lama dapatkan ID
        // $bab = Bab::with(['pemangkin'=>function($query){
        //     $query->select('id');
        // }])->find($bab->id);

        // dd($bab);

        return view('ppd.bab.edit', compact('bab', 'temas', 'fokuss', 'users', 'orgs'));
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

        return redirect()->route('ppd.bab.index')
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
