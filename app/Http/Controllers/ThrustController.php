<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreThrustRequest;
use App\Http\Requests\UpdateThrustRequest;
use App\Models\Thrust;
use Illuminate\Support\Facades\Auth;


class ThrustController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $thrust = Thrust::all();

        return view('thrust.index', compact('thrust'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();

        return view('thrust.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreThrustRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreThrustRequest $request)
    {
        $thrust = Thrust::create($request->all());
        return redirect()->route('thrust.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Thrust  $thrust
     * @return \Illuminate\Http\Response
     */
    public function show(Thrust $thrust)
    {
        return view('thrust.show', compact('thrust'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Thrust  $thrust
     * @return \Illuminate\Http\Response
     */
    public function edit(Thrust $thrust)
    {
        $user = Auth::user();
        return view('thrust.edit', compact('thrust'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateThrustRequest  $request
     * @param  \App\Models\Thrust  $thrust
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateThrustRequest $request, Thrust $thrust)
    {
        $thrust->update($request->all());
        return redirect()->route('thrust.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Thrust  $thrust
     * @return \Illuminate\Http\Response
     */
    public function destroy(Thrust $thrust)
    {
        $thrust->delete();

        return redirect()->route('thrust.index')
            ->with('Berjaya', 'Thrust berjaya dibuang');
    }
}
