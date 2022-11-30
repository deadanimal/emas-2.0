<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClusterRequest;
use App\Http\Requests\UpdateClusterRequest;
use App\Models\Cluster;
use App\Models\Strategy;
use App\Models\Thrus;
use Illuminate\Support\Facades\Auth;


class ClusterController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $clusters = Cluster::all();

        $strategies = Strategy::all();

        // $cats = Thrus::withCount('category')->get();

        // $cats = Thrus::all()->count();

        $cat1 = Thrus::where([
            ['category', '=', 'DEB']
        ])->count();
        $cat2 = Thrus::where([
            ['category', '=', '4IR']
        ])->count();


        // $categories = Thrus::where('thrus_id', '=', null)->get();



        return view('md.cluster.index', compact('clusters', 'strategies', 'cat1', 'cat2'));
    }


    public function create() {
        $user = Auth::user();
        $strategies = Strategy::all();
        return view('md.cluster.create', compact('user', 'strategies'));
    }

    public function store(StoreClusterRequest $request) {
        $cluster = Cluster::create($request->all());
        return redirect()->route('cluster.index');
    }


    public function show(Cluster $cluster) {
        //
    }


    public function edit(Cluster $cluster) {
        // $cluster = Cluster::all();
        $strategies = Strategy::all();
        return view('md.cluster.edit', compact('strategies', 'cluster'));
    }



    public function update(UpdateClusterRequest $request, Cluster $cluster) {
        $cluster->update($request->all());
        return redirect()->route('cluster.index');
    }


    public function destroy(Cluster $cluster) {
        $cluster->delete();

        return redirect()->route('cluster.index')
            ->with('Berjaya', 'Keterangan berjaya dibuang');
    }
}
