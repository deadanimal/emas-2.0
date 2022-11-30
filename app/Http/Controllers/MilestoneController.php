<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMilestoneRequest;
use App\Http\Requests\UpdateMilestoneRequest;
use App\Mail\MPBMilestone;
use App\Mail\MPBStatus;
use App\Mail\SendMail;
use App\Models\Key;
use App\Models\Kpi2;
use App\Models\Milestone;
use App\Models\National;
use App\Models\Sub;
use App\Models\Thrust;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class MilestoneController extends Controller
{


    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $miles = Milestone::where('user_id', Auth::user()->id)->get();
        $list = Kpi2::where('user_id', Auth::user()->id)->get();


        return view('mpb.milestone.index', compact('miles', 'list'));
    }

    public function index1(Request $request) {

        if ($request->user()->can('Approver')) {
            $miles = Milestone::all();
        } else {
            $miles = Milestone::where('user_id', Auth::user()->id)->get();
        }


        return view('mpb.display.displayThrust', compact('miles'));
    }


    public function create() {
        $user = Auth::user();


        $miles = Milestone::where('user_id', Auth::user()->id)->get();

        $thrust = Thrust::where('user_id', Auth::user()->id)->get();
        $nation = National::where('user_id', Auth::user()->id)->get();
        $key = Key::where('user_id', Auth::user()->id)->get();
        $sub = Sub::where('user_id', Auth::user()->id)->get();
        $kpi = Kpi2::where('user_id', Auth::user()->id)->get();
        $baseline = Kpi2::where('user_id', Auth::user()->id)->get();
        $national = Kpi2::where('user_id', Auth::user()->id)->get();





        // $list= Quarter::all();




        return view('mpb.milestone.create', compact('user', 'miles', 'thrust', 'nation', 'key', 'sub', 'kpi', 'baseline', 'national'));
    }

    public function store(StoreMilestoneRequest $request) {
        $miles = Milestone::create($request->validated());
        // $data  = User::find($miles->user_id);

        // Mail::to($data->email)->send(new MPBMilestone($data, $miles));


        return redirect()->route('milestone.index');
    }

    public function show(Milestone $milestone) {
        //
    }

    public function edit(Milestone $milestone) {
        $miles = Milestone::where('user_id', Auth::user()->id)->get();
        $thrust = Thrust::where('user_id', Auth::user()->id)->get();
        $nation = National::where('user_id', Auth::user()->id)->get();
        $key = Key::where('user_id', Auth::user()->id)->get();
        $sub = Sub::where('user_id', Auth::user()->id)->get();
        $kpi = Kpi2::where('user_id', Auth::user()->id)->get();
        $baseline = Kpi2::where('user_id', Auth::user()->id)->get();
        $national = Kpi2::where('user_id', Auth::user()->id)->get();
        // $list= Quarter::all();




        return view('mpb.milestone.edit', compact('milestone', 'thrust', 'nation', 'key', 'sub', 'kpi', 'baseline', 'national'));
    }

    public function update(UpdateMilestoneRequest $request, Milestone $milestone) {
        $milestone->update($request->all());

        return redirect()->route('milestone.index');
    }

    public function destroy(Milestone $milestone) {
        //
    }

    public function lulus($id) {

        $miles = Milestone::find($id);
        $data  = User::find($miles->user_id);

        $miles->lulus = true;
        $miles->ditolak = false;
        $miles->save();

        Mail::to($data->email)->send(new MPBStatus($data, $miles));



        return redirect()->to('MPB/displayThrust');
    }

    public function ditolak(Request $request) {
        $miles = Milestone::find($request->id);
        $data  = User::find($miles->user_id);

        $miles->lulus = false;
        $miles->ditolak = true;
        $miles->save();

        Mail::to($data->email)->send(new MPBStatus($data, $miles));


        return redirect()->to('MPB/displayThrust');
    }
}
