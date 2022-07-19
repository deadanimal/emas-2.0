<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStrategyRequest;
use App\Http\Requests\UpdateStrategyRequest;
use App\Models\Strategy;
use App\Models\Thrus;
use Illuminate\Support\Facades\Auth;


class StrategyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $strategys = Strategy::all();

        $thrust = Thrus::all();


        return view('md.strategy.index', compact('strategys', 'thrust'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();

        $thrust = Thrus::all();

        return view('md.strategy.create', compact('user', 'thrust'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStrategyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStrategyRequest $request)
    {
        $strategy = Strategy::create($request->all());
        return redirect()->route('strategy.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Strategy  $strategy
     * @return \Illuminate\Http\Response
     */
    public function show(Strategy $strategy)
    {
        return view('md.strategy.show', compact('strategy'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Strategy  $strategy
     * @return \Illuminate\Http\Response
     */
    public function edit(Strategy $strategy)
    {
        // dd($strategy);

       $thrust = Thrus::all();

       return view('md.strategy.edit', compact('strategy','thrust'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStrategyRequest  $request
     * @param  \App\Models\Strategy  $strategy
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStrategyRequest $request, Strategy $strategy)
    {
        $strategy->update($request->all());
        return redirect()->route('strategy.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Strategy  $strategy
     * @return \Illuminate\Http\Response
     */
    public function destroy(Strategy $strategy)
    {
        $strategy->delete();

        return redirect()->route('strategy.index')
            ->with('Berjaya', 'Keterangan berjaya dibuang');
    }
}
