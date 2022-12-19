<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKampungRequest;
use App\Http\Requests\UpdateKampungRequest;
use App\Models\Daerah;
use App\Models\Kampung;
use App\Models\Negeri;

class KampungController extends Controller
{

    public function index()
    {
    }


    public function create()
    {
        $daerah = Daerah::all();
        $negeri = Negeri::all();
        return view('KT.bantuan.create2', compact('negeri', 'daerah'));
    }

    public function store(StoreKampungRequest $request)
    {
        $kampung = Kampung::create($request->all());
        return redirect('/KT/bantuan1/senarai_kampung_menerima');
    }

    public function show(Kampung $kampung)
    {
        //
    }

    public function edit(Kampung $kampung)
    {
        //
    }

    public function update(UpdateKampungRequest $request, Kampung $kampung)
    {
        //
    }

    public function destroy(Kampung $kampung)
    {
        //
    }
}
