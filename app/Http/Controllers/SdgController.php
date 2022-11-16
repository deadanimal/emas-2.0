<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSdgRequest;
use App\Http\Requests\UpdateSdgRequest;
use App\Models\Fokusutama;
use App\Models\Pemangkindasar;
use App\Models\Perkarautama;
use App\Models\Sdg;
use Illuminate\Support\Facades\Auth;


class SdgController extends Controller
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
        $sdgs = Sdg::all();
        $list = Pemangkindasar::all();

        return view('ppd.sdg.index', compact('sdgs', 'list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();

        $list = Pemangkindasar::all();
        $fokus = Fokusutama::all();
        $perkara = Perkarautama::all();
        return view('ppd.sdg.create', compact('user', 'list', 'fokus', 'perkara'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSdgRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSdgRequest $request)
    {
        // dd($request->all());
        // $sdg = Sdg::create($request->all());

        $sdg = new Sdg();
        $sdg->user_id = Auth::user()->id;
        $sdg->fokus_id = $request->fokus_id;
        $sdg->perkara_id = $request->perkara_id;
        // $sdg->pemangkin_id = $request->pemangkin_id;
        $sdg->keteranganSdg = $request->keteranganSdg;


        $sdg->namaSdg = $request->namaSdg;

        // $sdg->pemangkin_id = json_decode($request->pemangkin_id, true);

        $sdg->pemangkin_id = serialize($request->pemangkin);


        $sdg->save();

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
        return view('ppd.sdg.show', compact('sdg'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sdg  $sdg
     * @return \Illuminate\Http\Response
     */
    public function edit(Sdg $sdg)
    {
        $user = Auth::user();

        $list = Pemangkindasar::all();
        $fokus = Fokusutama::all();
        $perkara = Perkarautama::all();

        try {
            $sdg->pemangkin_id = unserialize($sdg->pemangkin_id);
        } catch (\Throwable $th) {
            $sdg->pemangkin_id = array($sdg->pemangkin_id);
        }

        // dd($sdg);

        return view('ppd.sdg.edit', compact('sdg', 'list', 'fokus', 'perkara'));
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
        // $sdg->update($request->all());

        $sdg->user_id = Auth::user()->id;
        $sdg->fokus_id = $request->fokus_id;
        $sdg->perkara_id = $request->perkara_id;
        $sdg->keteranganSdg = $request->keteranganSdg;


        $sdg->namaSdg = $request->namaSdg;

        $sdg->pemangkin_id = serialize($request->pemangkin);


        $sdg->save();

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
