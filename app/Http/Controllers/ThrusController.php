<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreThrusRequest;
use App\Http\Requests\UpdateThrusRequest;
use App\Models\Thrus;
use Illuminate\Support\Facades\Auth;

class ThrusController extends Controller
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
        $thrust = Thrus::all();

        return view('md.thrus.index', compact('thrust'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();

        return view('md.thrus.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreThrusRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreThrusRequest $request)
    {
        $thrust = Thrus::create($request->all());
        return redirect()->route('thrus.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Thrus  $thrus
     * @return \Illuminate\Http\Response
     */
    public function show(Thrus $thrus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Thrus  $thrus
     * @return \Illuminate\Http\Response
     */
    public function edit(Thrus $thru)
    {

        // dd($thrus);

        $user = Auth::user();
        return view('md.thrus.edit', compact('thru'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateThrusRequest  $request
     * @param  \App\Models\Thrus  $thrus
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateThrusRequest $request, Thrus $thru)
    {
        $thru->update($request->all());
        return redirect()->route('thrus.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Thrus  $thrus
     * @return \Illuminate\Http\Response
     */
    public function destroy(Thrus $thrus)
    {
        $thrus->delete();

        return redirect()->route('thrus.index')
            ->with('Berjaya', 'Thrust berjaya dibuang');
    }
}
