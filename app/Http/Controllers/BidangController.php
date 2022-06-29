<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBidangRequest;
use App\Http\Requests\UpdateBidangRequest;
use App\Models\Bab;
use App\Models\Bidang;
use Illuminate\Support\Facades\Auth;

class BidangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bidangs = Bidang::all();
        $list = Bab::all();

        return view('ppd.bidang.index', compact('bidangs', 'list'));
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
        return view('ppd.bidang.create', compact('user', 'list'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBidangRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBidangRequest $request)
    {
        $bidang = Bidang::create($request->except('noBidang'));
        return redirect()->route('bidang.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bidang  $bidang
     * @return \Illuminate\Http\Response
     */
    public function show(Bidang $bidang)
    {
        return view('ppd.bidang.show', compact('bidang'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bidang  $bidang
     * @return \Illuminate\Http\Response
     */
    public function edit(Bidang $bidang)
    {
        $list = Bab::all();

        return view('ppd.bidang.edit', compact('bidang', 'list'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBidangRequest  $request
     * @param  \App\Models\Bidang  $bidang
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBidangRequest $request, Bidang $bidang)
    {
        $bidang->update($request->all());
        return redirect()->route('bidang.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bidang  $bidang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bidang $bidang)
    {
        $bidang->delete();

        return redirect()->route('bidang.index')
            ->with('Berjaya', 'Keterangan berjaya dibuang');
    }
}
