<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePlanRequest;
use App\Http\Requests\UpdatePlanRequest;
use App\Models\Initiative;
use App\Models\Plan;
use App\Models\Program;
use Illuminate\Support\Facades\Auth;

class PlanController extends Controller
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
        $plans = Plan::all();
        $initiatives = Initiative::all();

        return view('md.plan.index', compact('plans', 'initiatives'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        $initiatives = Initiative::all();
        $programs = Program::all();


        return view('md.plan.create', compact('user', 'initiatives', 'programs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePlanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePlanRequest $request)
    {
        $plan = Plan::create($request->all());
        return redirect()->route('plan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function show(Plan $plan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function edit(Plan $plan)
    {
        $user = Auth::user();
        $initiatives = Initiative::all();
        $programs = Program::all();
        return view('md.plan.edit', compact('plan', 'initiatives', 'programs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePlanRequest  $request
     * @param  \App\Models\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePlanRequest $request, Plan $plan)
    {
        $plan->update($request->all());
        return redirect()->route('plan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plan $plan)
    {
        $plan->delete();

        return redirect()->route('plan.index')
            ->with('Berjaya', 'Plan berjaya dibuang');
    }
}
