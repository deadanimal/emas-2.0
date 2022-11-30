<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKetuaKampungRequest;
use App\Http\Requests\UpdateKetuaKampungRequest;
use App\Models\Daerah;
use App\Models\Kampung;
use App\Models\KetuaKampung;
use App\Models\Negeri;
use Illuminate\Http\Request;

class KetuaKampungController extends Controller
{

    public function index() {
        //
    }


    public function create() {
        $negeris = Negeri::all();
        $daerahs = Daerah::all();
        $kampungs = Kampung::all();

        return view('KT.bantuan.create1', compact('negeris', 'daerahs', 'kampungs'));
    }

    public function store(StoreKetuaKampungRequest $request) {
        KetuaKampung::create($request->all());
        return redirect('/bantuan1/senarai_ketua_kampung');
    }

    public function show(KetuaKampung $ketuaKampung) {
        //
    }

    public function edit(KetuaKampung $ketuaKampung) {
        //
    }

    public function update(UpdateKetuaKampungRequest $request, KetuaKampung $ketuaKampung) {
        //
    }

    public function destroy(KetuaKampung $ketuaKampung) {
        //
    }

    public function find(Request $request) {
        if ($request->daerah == 'null') {
            $ketuaKampung = KetuaKampung::where('negeri_id', $request->negeri)
                ->get();
        } elseif ($request->kampung == 'null') {
            $ketuaKampung = KetuaKampung::where('negeri_id', $request->negeri)
                ->where('daerah_id', $request->daerah)
                ->get();
        } elseif ($request->kampung != 'null') {
            $ketuaKampung = KetuaKampung::where('negeri_id', $request->negeri)
                ->where('daerah_id', $request->daerah)
                ->where('kampung_id', $request->kampung)
                ->get();
        }
        return response()->json($ketuaKampung);
    }
}
