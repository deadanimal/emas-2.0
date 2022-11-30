<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePerkarautamaRequest;
use App\Http\Requests\UpdatePerkarautamaRequest;
use App\Models\Fokusutama;
use App\Models\Perkarautama;
use Illuminate\Support\Facades\Auth;


class PerkarautamaController extends Controller
{


    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {

        $perkarautama = Perkarautama::all();

        $list = Fokusutama::all();

        return view('ppd.perkarautama.index', compact('perkarautama', 'list'));
    }


    public function create() {
        $user = Auth::user();


        $list = Fokusutama::all();

        return view('ppd.perkarautama.create', compact("user", "list"));
    }

    public function store(StorePerkarautamaRequest $request) {
        // dd($request);
        $perkarautama = Perkarautama::create($request->all());
        return redirect()->route('perkarautama.index');
    }

    public function show(Perkarautama $perkarautama) {
        return view('ppd.perkarautama.show', compact('perkarautama'));
    }

    public function edit(Perkarautama $perkarautama) {
        $user = Auth::user();

        $list = Fokusutama::all();

        return view('ppd.perkarautama.edit', compact('perkarautama', 'list'));
    }

    public function update(UpdatePerkarautamaRequest $request, Perkarautama $perkarautama) {
        $perkarautama->update($request->all());
        return redirect()->route('perkarautama.index');
    }

    public function destroy(Perkarautama $perkarautama) {
        $perkarautama->delete();

        return redirect()->route('ppd.perkarautama.index')
            ->with('Berjaya', 'Berjaya dibuang');
    }
}
