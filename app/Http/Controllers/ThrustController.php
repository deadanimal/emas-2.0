<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreThrustRequest;
use App\Http\Requests\UpdateThrustRequest;
use App\Models\Key;
use App\Models\National;
use App\Models\Sub;
use App\Models\Thrus;
use App\Models\Thrust;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;



class ThrustController extends Controller
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
        $thrust = Thrust::where('user_id', Auth::user()->id)->get();

        return view('mpb.thrust.index', compact('thrust'));
    }

    // public function index1(Request $request)
    // {

    //     // dd($request);
    //     $thrusts = Thrust::with(['national'])->where('user_id', Auth::user()->id)->get();
    //     // $nationals = National::all();
    //     // $keys = Key::all();
    //     // $subs = Sub::all();

    //     return view('mpb.display.displayThrust', compact('thrusts'));

    //     // return view('mpb.display.displayThrust', compact('thrusts', 'nationals', 'keys', 'subs'));
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();

        return view('mpb.thrust.create', compact('user'));
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
        return view('mpb.thrust.show', compact('thrust'));
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
        return view('mpb.thrust.edit', compact('thrust'));
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

    public function lulus($id)
    {

        $thrust = Thrust::find($id);
        $thrust->lulus = true;
        $thrust->ditolak = false;
        $thrust->save();


        return redirect()->to('MPB/displayThrust');
    }

    public function ditolak(Request $request)
    {
        $thrust = Thrust::find($request->id);
        $thrust->lulus = false;
        $thrust->ditolak = true;
        $thrust->save();


        return redirect()->to('MPB/displayThrust');
    }
}
