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

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $plans = Plan::all();
        $initiatives = Initiative::all();

        return view('md.plan.index', compact('plans', 'initiatives'));
    }


    public function create() {
        $user = Auth::user();
        $initiatives = Initiative::all();
        $programs = Program::all();


        return view('md.plan.create', compact('user', 'initiatives', 'programs'));
    }

    public function store(StorePlanRequest $request) {
        $plan = Plan::create($request->all());
        return redirect()->route('plan.index');
    }

    public function show(Plan $plan) {}

    public function edit(Plan $plan) {
        $user = Auth::user();
        $initiatives = Initiative::all();
        $programs = Program::all();
        return view('md.plan.edit', compact('plan', 'initiatives', 'programs'));
    }

    public function update(UpdatePlanRequest $request, Plan $plan) {
        $plan->update($request->all());
        return redirect()->route('plan.index');
    }

    public function destroy(Plan $plan) {
        $plan->delete();

        return redirect()->route('plan.index')
            ->with('Berjaya', 'Plan berjaya dibuang');
    }
}
