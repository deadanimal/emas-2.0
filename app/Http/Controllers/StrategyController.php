<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStrategyRequest;
use App\Http\Requests\UpdateStrategyRequest;
use App\Models\Category;
use App\Models\Strategy;
use App\Models\Thrus;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class StrategyController extends Controller
{


    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $strategys = Strategy::all();

        $thru = Thrus::all();


        return view('md.strategy.index', compact('strategys', 'thru'));
    }


    public function create() {
        $user = Auth::user();

        $thrusts = Thrus::all();
        // $thrusts = DB::table('thruses')->get();
        $categories = Thrus::all();



        return view('md.strategy.create', compact('user', 'thrusts', 'categories'));
    }


    public function store(StoreStrategyRequest $request) {

        // dd($request);
        $strategy = Strategy::create($request->all());
        return redirect()->route('strategy.index');
    }


    public function show(Strategy $strategy) {
        return view('md.strategy.show', compact('strategy'));
    }

 
    public function edit(Strategy $strategy) {
        // dd($strategy);

        $thrust = Thrus::all();
        $categories = Thrus::all();


        return view('md.strategy.edit', compact('strategy', 'thrust', 'categories'));
    }


    public function update(UpdateStrategyRequest $request, Strategy $strategy) {
        $strategy->update($request->all());
        return redirect()->route('strategy.index');
    }

    public function destroy(Strategy $strategy) {
        $strategy->delete();

        return redirect()->route('strategy.index')
            ->with('Berjaya', 'Keterangan berjaya dibuang');
    }
}
