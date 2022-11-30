<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProfil_kategoriRequest;
use App\Http\Requests\UpdateProfil_kategoriRequest;
use App\Models\Profil_kategori;

class ProfilKategoriController extends Controller
{

    public function index() {}

    public function create() {}

    public function store(StoreProfil_kategoriRequest $request) {}

    public function show(Profil_kategori $profil_kategori) {}

    public function edit(Profil_kategori $profil_kategori) {}

    public function update(UpdateProfil_kategoriRequest $request, Profil_kategori $profil_kategori) {}

    public function destroy(Profil_kategori $profil_kategori) {}
}
