<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProfilRequest;
use App\Http\Requests\UpdateProfilRequest;
use App\Models\Profil;

class ProfilController extends Controller
{

    public function index() {}

    public function create() {}

    public function store(StoreProfilRequest $request) {}

    public function show(Profil $profil) {}

    public function edit(Profil $profil) {}

    public function update(UpdateProfilRequest $request, Profil $profil) {}

    public function destroy(Profil $profil) {
        $profil->delete();

        return redirect()->route('KT.kemasukanData.index')
            ->with('Berjaya', 'Keterangan berjaya dibuang');
    }
}
