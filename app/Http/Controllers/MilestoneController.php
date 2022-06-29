<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMilestoneRequest;
use App\Http\Requests\UpdateMilestoneRequest;
use App\Models\Key;
use App\Models\Kpi2;
use App\Models\Milestone;
use App\Models\National;
use App\Models\Sub;
use App\Models\Thrust;
use Illuminate\Support\Facades\Auth;



class MilestoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $miles = Milestone::all();
        $list= Kpi2::all();


        return view('mpb.milestone.index', compact('miles', 'list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();

        $miles = Milestone::all();
        $thrust= Thrust::all();
        $nation= National::all();
        $key= Key::all();
        $sub= Sub::all();
        $kpi= Kpi2::all();
        // $list= Quarter::all();




        return view('mpb.milestone.create', compact('user', 'miles', 'thrust', 'nation', 'key', 'sub', 'kpi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMilestoneRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMilestoneRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Milestone  $milestone
     * @return \Illuminate\Http\Response
     */
    public function show(Milestone $milestone)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Milestone  $milestone
     * @return \Illuminate\Http\Response
     */
    public function edit(Milestone $milestone)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMilestoneRequest  $request
     * @param  \App\Models\Milestone  $milestone
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMilestoneRequest $request, Milestone $milestone)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Milestone  $milestone
     * @return \Illuminate\Http\Response
     */
    public function destroy(Milestone $milestone)
    {
        //
    }
}
