<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSectoralRequest;
use App\Http\Requests\UpdateSectoralRequest;
use App\Models\Cluster;
use App\Models\Initiative;
use App\Models\Sectoral;
use Illuminate\Support\Facades\Auth;

class SectoralController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $sectorals = Sectoral::all();
        $initiatives = Initiative::all();

        return view('md.sectoral.index', compact('initiatives', 'sectorals'));
    }


    public function create()
    {
        $user = Auth::user();
        $clusters = Cluster::all();
        // $strategies = Strategy::all();
        return view('md.sectoral.create', compact('user', 'clusters'));
    }

    public function store(StoreSectoralRequest $request)
    {
        $sectorals = Sectoral::create($request->all());
        return redirect()->route('sectoral.index');
    }

    public function show(Sectoral $sectoral)
    {
    }

    public function edit(Sectoral $sectoral)
    {
    }

    public function update(UpdateSectoralRequest $request, Sectoral $sectoral)
    {
    }

    public function destroy(Sectoral $sectoral)
    {
    }
}
