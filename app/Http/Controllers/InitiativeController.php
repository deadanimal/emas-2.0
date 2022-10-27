<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInitiativeRequest;
use App\Http\Requests\UpdateInitiativeRequest;
use App\Models\Cluster;
use App\Models\Initiative;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;



class InitiativeController extends Controller
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
        $initiatives = Initiative::all();
        $cluster = Cluster::all();
        return view('md.initiative.index', compact('initiatives', 'cluster'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        $cluster = Cluster::all();

        return view('md.initiative.create', compact('user', 'cluster'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreInitiativeRequest  $request
     * @return \Illuminate\Http\Response
     */



    public function store(StoreInitiativeRequest $request)
    {


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
        // $initiatives->phase = 'a';
        $initiatives->leadAgency = $request->leadAgency;
        $initiatives->sec_id = $request->sec_id;
        $initiatives->responsible_user = $request->responsible_user;
        $initiatives->PIC = $request->PIC;
        $initiatives->position = $request->position;
        $initiatives->phoneNo = $request->phoneNo;
        $initiatives->email = $request->email;
        $initiatives->email2 = $request->email2;








        // if (!empty($request->phase)) {
        // $initiatives->phase = implode(" , ", $request->phase);
        // }



        $initiatives->save();
        return redirect()->route('initiative.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Initiative  $initiative
     * @return \Illuminate\Http\Response
     */
    public function show(Initiative $initiative)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Initiative  $initiative
     * @return \Illuminate\Http\Response
     */
    public function edit(Initiative $initiative)
    {

        // dd($initiative);
        // $initiative = Initiative::all();
        $cluster = Cluster::all();
        return view('md.initiative.edit', compact('cluster', 'initiative'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInitiativeRequest  $request
     * @param  \App\Models\Initiative  $initiative
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
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
        // $initiative->phase = 'a';
        $initiative->leadAgency = $request->leadAgency;
        $initiative->sec_id = $request->sec_id;
        $initiative->responsible_user = $request->responsible_user;
        $initiative->category = $request->category;
        $initiative->PIC = $request->PIC;
        $initiative->position = $request->position;
        $initiative->phoneNo = $request->phoneNo;
        $initiative->email = $request->email;
        $initiative->email2 = $request->email2;



        // if (!empty($request->phase)) {
        // $initiative->phase = implode(',', $request->phase);
        // }



        $initiative->save();


        return redirect()->route('initiative.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Initiative  $initiative
     * @return \Illuminate\Http\Response
     */
    public function destroy(Initiative $initiative)
    {
        $initiative->delete();
        return redirect()->route('initiative.index')
            ->with('Berjaya', 'Keterangan berjaya dibuang');
    }
}
