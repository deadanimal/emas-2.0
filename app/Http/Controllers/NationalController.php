<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNationalRequest;
use App\Http\Requests\UpdateNationalRequest;
use App\Models\National;
use App\Models\Thrust;
use Illuminate\Support\Facades\Auth;


class NationalController extends Controller
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
        $national = National::where('user_id', Auth::user()->id)->get();

        $list = Thrust::all();

        return view('mpb.national.index', compact('national', 'list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();


        $list = Thrust::where('user_id', Auth::user()->id)->get();

        return view('mpb.national.create', compact('list', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreNationalRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNationalRequest $request)
    {
        $national = National::create($request->all());
        return redirect()->route('national.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\National  $national
     * @return \Illuminate\Http\Response
     */
    public function show(National $national)
    {
        return view('mpb.national.show', compact('national'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\National  $national
     * @return \Illuminate\Http\Response
     */
    public function edit(National $national)
    {
        $user = Auth::user();

        $list = Thrust::where('user_id', Auth::user()->id)->get();

        return view('mpb.national.edit', compact('national', 'list'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNationalRequest  $request
     * @param  \App\Models\National  $national
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNationalRequest $request, National $national)
    {
        $national->update($request->all());
        return redirect()->route('national.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\National  $national
     * @return \Illuminate\Http\Response
     */
    public function destroy(National $national)
    {
        $national->delete();

        return redirect()->route('national.index')
            ->with('Berjaya', 'Berjaya dibuang');
    }
}
