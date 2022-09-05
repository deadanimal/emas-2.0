<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKetuaKampungRequest;
use App\Http\Requests\UpdateKetuaKampungRequest;
use App\Models\Daerah;
use App\Models\Kampung;
use App\Models\KetuaKampung;
use App\Models\Negeri;
use Illuminate\Http\Request;

class KetuaKampungController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $negeris = Negeri::all();
        $daerahs = Daerah::all();
        $kampungs = Kampung::all();

        return view('kt.bantuan.create1', compact('negeris', 'daerahs', 'kampungs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreKetuaKampungRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKetuaKampungRequest $request)
    {
        KetuaKampung::create($request->all());
        return redirect('/bantuan1/senarai_ketua_kampung');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KetuaKampung  $ketuaKampung
     * @return \Illuminate\Http\Response
     */
    public function show(KetuaKampung $ketuaKampung)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KetuaKampung  $ketuaKampung
     * @return \Illuminate\Http\Response
     */
    public function edit(KetuaKampung $ketuaKampung)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKetuaKampungRequest  $request
     * @param  \App\Models\KetuaKampung  $ketuaKampung
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKetuaKampungRequest $request, KetuaKampung $ketuaKampung)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KetuaKampung  $ketuaKampung
     * @return \Illuminate\Http\Response
     */
    public function destroy(KetuaKampung $ketuaKampung)
    {
        //
    }

    public function find(Request $request)
    {
        if ($request->daerah == 'null') {
            $ketuaKampung = KetuaKampung::where('negeri_id', $request->negeri)
                ->get();
        } elseif ($request->kampung == 'null') {
            $ketuaKampung = KetuaKampung::where('negeri_id', $request->negeri)
                ->where('daerah_id', $request->daerah)
                ->get();
        } elseif ($request->kampung != 'null') {
            $ketuaKampung = KetuaKampung::where('negeri_id', $request->negeri)
                ->where('daerah_id', $request->daerah)
                ->where('kampung_id', $request->kampung)
                ->get();
        }
        return response()->json($ketuaKampung);
    }
}
