<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMarkahRequest;
use App\Http\Requests\UpdateMarkahRequest;
use App\Models\Bab;
use App\Models\Bidang;
use App\Models\Markah;
use Illuminate\Support\Facades\Auth;
use App\Models\Outcome;
use App\Models\Pemangkindasar;
use Illuminate\Http\Request;


class MarkahController extends Controller
{

    public function index() {
        $markah = Markah::all();

        return view('markah.index', compact('markah'));
    }


    public function create() {
        $user = Auth::user();

        $list= Outcome::all();
        $listBidang= Bidang::all();
        $listBab= Bab::all();
        $listTema= Pemangkindasar::all();


        return view('markah.create', compact('user', 'list', 'listBidang', 'listBab', 'listTema'));
    }

    public function store(StoreMarkahRequest $request) {
        // dd($request);

        $markah = Markah::create($request->all());
        return redirect()->route('markah.index');
    }

    public function lulus($id) {

        $markah = Markah::find($id);
        $markah->lulus = true;
        $markah->save();


        return redirect()->to('/markah');


    }

    public function ditolak(Request $request) {
        $markah = Markah::find($request->id);
        $markah->lulus = false;
        $markah->save();

        return redirect()->to('/markah');

    }

    public function show(Markah $markah) {
        //
    }

    public function edit(Markah $markah) {

        $list= Outcome::all();
        $listBidang= Bidang::all();
        $listBab= Bab::all();
        $listTema= Pemangkindasar::all();

        return view('markah.edit', compact('user', 'list', 'listBidang', 'listBab', 'listTema'));

    }

    public function update(UpdateMarkahRequest $request, Markah $markah) {
        $markah->update($request->all());
        return redirect()->route('markah.index');
    }

    public function destroy(Markah $markah) {
        $markah->delete();

        return redirect()->route('markah.index')
            ->with('Berjaya', 'Markah berjaya dibuang');
    }
}
