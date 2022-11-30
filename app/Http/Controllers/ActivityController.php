<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreactivityRequest;
use App\Http\Requests\UpdateactivityRequest;
use App\Models\activity;
use App\Models\Cluster;
use App\Models\Initiative;
use App\Models\Plan;
use App\Models\Program;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use PDF;



class ActivityController extends Controller
{


    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $activities = activity::all();
        $initiatives = Initiative::all();
        $programs = Program::all();
        $plans = Plan::all();

        return view('md.activity.index', compact('activities', 'plans', 'initiatives', 'programs'));
    }

    public function cluster(Request $request) {


        // if ($request->user()->role == 'SuperAdmin') {

        //     $activities = activity::all();
        // } else {
        //     $user_id = $request->user()->id;

        //     $activities = activity::where('user_id', '=', $user_id)->get();
        // }

        if ($request->user()->can('Epu MD')) {

            $activities = activity::with('cluster')->get();
        } else {

            $user_id = $request->user()->id;

            $activities = activity::where('user_id', '=', $user_id)->get();
        }


        // $activities = activity::with('cluster')->get();

        return view('md.activity.approval', compact('activities'));
    }

    public function lulus($id) {

        $activities = activity::find($id);
        $activities->lulus = true;
        $activities->ditolak = false;
        $activities->save();

        return redirect()->to('MD/approval/cluster');
    }

    public function ditolak(Request $request) {
        $activities = activity::find($request->id);
        $activities->lulus = false;
        $activities->ditolak = true;
        $activities->save();

        return redirect()->to('MD/approval/cluster');
    }

    public function cluster1(Request $request) {


        if ($request->user()->role == 'SuperAdmin') {

            $activities = activity::all();
        } else {
            $user_id = $request->user()->id;

            $activities = activity::where('user_id', '=', $user_id)->get();
        }


        return view('md.activity.display', compact('activities'));
    }

    public function cluster2(Request $request) {


        if ($request->user()->role == 'SuperAdmin') {

            $activities = activity::all();
        } else {
            $user_id = $request->user()->id;

            $activities = activity::where('user_id', '=', $user_id)->get();
        }


        return view('md.activity.display1', compact('activities'));
    }


    public function create() {
        $user = Auth::user();
        $clusters = Cluster::all();
        $initiatives = Initiative::all();
        $programs = Program::all();
        $plans = Plan::all();

        return view('md.activity.create', compact('user', 'plans', 'initiatives', 'programs', 'clusters'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreactivityRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreactivityRequest $request) {
        // dd($request);
        // $request->validate([
        //     'document' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);

        $imageName = time() . '.' . $request->document->extension();

        $request->document->move(public_path('images'), $imageName);

        // $request->document->storeAs('images', $imageName);

        // $activity = activity::create($request->all());

        $activity = new activity();
        $activity->cluster_id = $request->cluster_id;
        $activity->initiative_id = $request->initiative_id;
        $activity->program_id = $request->program_id;
        $activity->plan_id = $request->plan_id;
        $activity->user_id = $request->user_id;
        $activity->leadAgency = $request->leadAgency;
        $activity->namaActivity = $request->namaActivity;
        $activity->startDate = $request->startDate;
        $activity->endDate = $request->endDate;
        $activity->output = $request->output;
        $activity->weightage = $request->weightage;
        $activity->weightage_progress = $request->weightage_progress;
        $activity->output_progress = $request->output_progress;
        $activity->additionalOutput = $request->additionalOutput;
        $activity->remarks = $request->remarks;
        $activity->document_pdf = $imageName;
        $activity->unit = $request->unit;
        $activity->PIC = $request->PIC;

        // dd($activity);
        $activity->save();


        return redirect()->route('activity.index');
    }

    // public function store1(Request $request)
    // {

    //     dd('b');
    //     $request->validate([
    //         'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    //     ]);

    //     $imageName = time() . '.' . $request->image->extension();

    //     $request->image->move(public_path('images'), $imageName);

    //     $request->image->storeAs('images', $imageName);



    //     return back()
    //         ->with('success', 'You have successfully upload image.')
    //         ->with('image', $imageName);
    // }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function show(activity $activity) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function edit(activity $activity) {
        $user = Auth::user();
        $clusters = Cluster::all();
        $initiatives = Initiative::all();
        $programs = Program::all();
        $plans = Plan::all();

        return view('md.activity.edit', compact('activity', 'plans', 'initiatives', 'programs', 'clusters'));
    }

    public function progress_update(activity $activity, $id) {
        // dd($activity);
        $activity = activity::find($id);
        $user = Auth::user();
        $clusters = Cluster::all();
        $initiatives = Initiative::all();
        $programs = Program::all();
        $plans = Plan::all();

        return view('md.activity.progress_update', compact('activity', 'plans', 'initiatives', 'programs', 'clusters'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateactivityRequest  $request
     * @param  \App\Models\activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateactivityRequest $request, activity $activity) {
        // $activity->update($request->all());

        // $request->validate([
        //     'document' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);

        $activity->cluster_id = $request->cluster_id;
        $activity->initiative_id = $request->initiative_id;
        $activity->program_id = $request->program_id;
        $activity->plan_id = $request->plan_id;
        $activity->user_id = Auth::user()->id;
        $activity->leadAgency = $request->leadAgency;
        $activity->namaActivity = $request->namaActivity;
        $activity->startDate = $request->startDate;
        $activity->endDate = $request->endDate;
        $activity->output = $request->output;
        $activity->weightage = $request->weightage;
        $activity->weightage_progress = $request->weightage_progress;
        $activity->output_progress = $request->output_progress;
        $activity->additionalOutput = $request->additionalOutput;
        $activity->remarks = $request->remarks;
        $activity->unit = $request->unit;
        $activity->PIC = $request->PIC;
        if (!empty($request->document)) {
            $imageName = time() . '.' . $request->document->extension();

            $request->document->move(public_path('images'), $imageName);
            $activity->document_pdf = $imageName;
        }
        // dd($activity);
        $activity->save();

        return redirect()->route('activity.index');
    }

    public function update_progress(UpdateactivityRequest $request, activity $activity) {

        $activity->user_id = Auth::user()->id;
        $activity->year = $request->year;
        $activity->month = $request->month;
        $activity->output_update = $request->output_update;
        $activity->weightage_progress = $request->weightage_progress;

        $activity->save();

        return redirect()->route('activity.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function destroy(activity $activity) {
        $activity->delete();

        return redirect()->route('activity.index')
            ->with('Berjaya', 'Activity berjaya dibuang');
    }

    public function searchActivity(Request $request) {
        $activity = activity::where('id', '!=', 'null');

        if ($request->result[0] != 'null') {
            $activity->where('initiative_id', $request->result[0]);
        }
        if ($request->result[1] != 'null') {
            $activity->where('program_id', $request->result[1]);
        }
        if ($request->result[2] != 'null') {
            $activity->where('plan_id', $request->result[2]);
        }


        return response()->json($activity->get());
    }

    public function searchActivity1(Request $request) {
        $activity = activity::where('id', '!=', 'null');

        if ($request->result[0] != 'null') {
            $activity->where('initiative_id', $request->result[0]);
        }
        if ($request->result[1] != 'null') {
            $activity->where('program_id', $request->result[1]);
        }
        if ($request->result[2] != 'null') {
            $activity->where('plan_id', $request->result[2]);
        }


        return response()->json($activity->get());
    }
}
