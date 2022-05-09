<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMarkahRequest;
use App\Http\Requests\UpdateMarkahRequest;
use App\Models\Bab;
use App\Models\Bidang;
use App\Models\Markah;
use Illuminate\Support\Facades\Auth;
use App\Models\Outcome;
use App\Models\Pemangkindasar;
use Illuminate\Http\Request;


class MarkahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $markah = Markah::all();

        return view('markah.index', compact('markah'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();

        $list= Outcome::all();
        $listBidang= Bidang::all();
        $listBab= Bab::all();
        $listTema= Pemangkindasar::all();


        return view('markah.create', compact('user', 'list', 'listBidang', 'listBab', 'listTema'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMarkahRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMarkahRequest $request)
    {
        dd($request);

        $markah = Markah::create($request->all());
        return redirect()->route('markah.index');
    }

    public function lulus($id)
    {

        $markah = Markah::find($id);
        $markah->lulus = true;
        $markah->save();


        return redirect()->to('/markah');


    }

    public function ditolak(Request $request)
    {
        $markah = Markah::find($request->id);
        $markah->lulus = false;
        $markah->save();

        return redirect()->to('/markah');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Markah  $markah
     * @return \Illuminate\Http\Response
     */
    public function show(Markah $markah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Markah  $markah
     * @return \Illuminate\Http\Response
     */
    public function edit(Markah $markah)
    {

        $list= Outcome::all();
        $listBidang= Bidang::all();
        $listBab= Bab::all();
        $listTema= Pemangkindasar::all();

        return view('markah.edit', compact('user', 'list', 'listBidang', 'listBab', 'listTema'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMarkahRequest  $request
     * @param  \App\Models\Markah  $markah
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMarkahRequest $request, Markah $markah)
    {
        $markah->update($request->all());
        return redirect()->route('markah.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Markah  $markah
     * @return \Illuminate\Http\Response
     */
    public function destroy(Markah $markah)
    {
        $markah->delete();

        return redirect()->route('markah.index')
            ->with('Berjaya', 'Markah berjaya dibuang');
    }
}
