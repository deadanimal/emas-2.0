<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreThrusRequest;
use App\Http\Requests\UpdateThrusRequest;
use App\Models\Thrus;
use Illuminate\Support\Facades\Auth;

class ThrusController extends Controller
{


    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $thrust = Thrus::all();

        return view('md.thrus.index', compact('thrust'));
    }


    public function create() {
        $user = Auth::user();

        return view('md.thrus.create', compact('user'));
    }

    public function store(StoreThrusRequest $request) {

        $thrust = Thrus::create($request->all());
        return redirect()->route('thrus.index');
    }


    public function show(Thrus $thrus) {
        //
    }

    public function edit(Thrus $thru) {

        // dd($thrus);

        $user = Auth::user();
        return view('md.thrus.edit', compact('thru'));
    }

    public function update(UpdateThrusRequest $request, Thrus $thru) {
        $thru->update($request->all());
        return redirect()->route('thrus.index');
    }

    public function destroy(Thrus $thru) {

        $thru->delete();

        return redirect()->route('thrus.index')
            ->with('Berjaya', 'Thrust berjaya dibuang');
    }
}
