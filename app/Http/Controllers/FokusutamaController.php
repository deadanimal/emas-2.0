<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFokusutamaRequest;
use App\Http\Requests\UpdateFokusutamaRequest;
use App\Models\Fokusutama;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class FokusutamaController extends Controller
{


    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $user = Auth::user();
        $fokusutama = Fokusutama::all();
        return view('ppd.fokusutama.index', compact('fokusutama', 'user'));
    }

    public function create() {

        $user = Auth::user();
        return view('ppd.fokusutama.create', ['user' => $user]);
    }

    public function store(StoreFokusutamaRequest $request) {
        // dd($request->all());
        $fokusutama = Fokusutama::create($request->all());
        return redirect()->route('fokusutama.index');
    }

    public function show(Fokusutama $fokusutama) {
        return view('ppd.fokusutama.show', compact('fokusutama'));
    }


    public function edit(Fokusutama $fokusutama) {
        return view('ppd.fokusutama.edit', compact('fokusutama'));
    }

    public function update(UpdateFokusutamaRequest $request, Fokusutama $fokusutama) {
        $fokusutama->update($request->all());
        return redirect()->route('fokusutama.index');
    }

    public function destroy(Fokusutama $fokusutama) {
        $fokusutama->delete();

        return redirect()->route('ppd.fokusutama.index')
            ->with('Berjaya', 'Keterangan berjaya dibuang');
    }
}
