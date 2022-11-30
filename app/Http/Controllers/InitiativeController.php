<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInitiativeRequest;
use App\Http\Requests\UpdateInitiativeRequest;
use App\Models\Cluster;
use App\Models\Initiative;
use App\Models\Initiative_update;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;



class InitiativeController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $initiatives = Initiative::all();
        $cluster = Cluster::all();




        return view('md.initiative.index', compact('initiatives', 'cluster'));
    }


    public function create() {
        $user = Auth::user();
        $cluster = Cluster::all();

        return view('md.initiative.create', compact('user', 'cluster'));
    }



    public function store(StoreInitiativeRequest $request) {


        // $initiative = Initiative::create($request->all());
        // return redirect()->route('initiative.index');

        // $input = $request->all();
        // $input['phase'] = $request->input('phase');
        // Initiative::create($input);
        // return redirect()->route('initiative.index');

        $initiatives = new Initiative();

        $initiatives->user_id = Auth::user()->id;
        $initiatives->cluster_id = $request->cluster_id;
        // $initiatives->namaCluster = $request->namaCluster;
        $initiatives->namaInitiative = $request->namaInitiative;
        $initiatives->category = $request->category;
        $initiatives->code = $request->code;
        // $initiatives->national = $request->national;
        $initiatives->target = $request->target;
        $initiatives->phase = $request->phase;
        $initiatives->leadAgency = $request->leadAgency;
        $initiatives->sec_id = $request->sec_id;
        $initiatives->responsible_user = $request->responsible_user;
        $initiatives->PIC = $request->PIC;
        $initiatives->position = $request->position;
        $initiatives->phoneNo = $request->phoneNo;
        $initiatives->email = $request->email;
        $initiatives->email2 = $request->email2;
        $initiatives->target_2 = $request->target_2;
        $initiatives->target_3 = $request->target_3;








        // if (!empty($request->phase)) {
        // $initiatives->phase = implode(" , ", $request->phase);
        // }



        $initiatives->save();
        return redirect()->route('initiative.index');
    }

    public function show(Initiative $initiative) {
        //
    }

    public function edit(Initiative $initiative) {

        // dd($initiative);
        // $initiative = Initiative::all();
        $cluster = Cluster::all();
        return view('md.initiative.edit', compact('cluster', 'initiative'));
    }

    public function edit1(Initiative $id) {
        $initiative = $id;
        $initiative_update = Initiative_update::where('initiative_id', $initiative->id)->get();


        $cluster = Cluster::all();
        return view('md.initiative.update', compact('cluster', 'initiative', 'initiative_update'));
    }

    public function update(Request $request, $id) {
        // $initiative->update($request->all());

        $initiative = Initiative::find($id);

        $initiative->user_id = Auth::user()->id;
        $initiative->cluster_id = $request->cluster_id;
        // $initiative->namaCluster = $request->namaCluster;
        $initiative->namaInitiative = $request->namaInitiative;
        // $initiative->category = $request->category;
        $initiative->code = $request->code;
        // $initiative->national = $request->national;
        $initiative->target = $request->target;
        $initiative->phase = $request->phase;
        $initiative->leadAgency = $request->leadAgency;
        $initiative->sec_id = $request->sec_id;
        $initiative->responsible_user = $request->responsible_user;
        $initiative->category = $request->category;
        $initiative->PIC = $request->PIC;
        $initiative->position = $request->position;
        $initiative->phoneNo = $request->phoneNo;
        $initiative->email = $request->email;
        $initiative->email2 = $request->email2;
        $initiative->target_2 = $request->target_2;
        $initiative->target_3 = $request->target_3;



        // if (!empty($request->phase)) {
        // $initiative->phase = implode(',', $request->phase);
        // }



        $initiative->save();


        return redirect()->route('initiative.index');
    }

    public function update1(Request $request, $id) {
        $initiative_update = new Initiative_update();

        $initiative_update->initiative_id = $request->initiative_id;


        $initiative_update->target = $request->target;
        $initiative_update->actual_achievement = $request->actual_achievement;

        $initiative_update->target_1 = $request->target_1;
        $initiative_update->actual_achievement_1 = $request->actual_achievement_1;

        $initiative_update->target_2 = $request->target_2;
        $initiative_update->actual_achievement_2 = $request->actual_achievement_2;

        $initiative_update->target_3 = $request->target_3;
        $initiative_update->actual_achievement_3 = $request->actual_achievement_3;

        $initiative_update->save();


        return back();
    }

    public function destroy(Initiative $initiative) {
        $initiative->delete();
        return redirect()->route('initiative.index')
            ->with('Berjaya', 'Keterangan berjaya dibuang');
    }

    public function searchInitiative(Request $request) {
        $initiative = Initiative::where('id', '!=', 'null');

        if ($request->result[0] != 'null') {
            $initiative->where('cluster_id', $request->result[0]);
        }
        if ($request->result[1] != 'null') {
            $initiative->where('category', $request->result[1]);
        }
        if ($request->result[2] != 'null') {
            $initiative->where('sec_id', $request->result[2]);
        }
        if ($request->result[3] != 'null') {
            $initiative->where('phase', $request->result[3]);
        }

        return response()->json($initiative->get());
    }
}
