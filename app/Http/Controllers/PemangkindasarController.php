<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePemangkindasarRequest;
use App\Http\Requests\UpdatePemangkindasarRequest;
use App\Models\Fokusutama;
use App\Models\Pemangkindasar;
use App\Models\Perkarautama;
use Illuminate\Support\Facades\Auth;


class PemangkindasarController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $pemangkindasar = Pemangkindasar::all();

        return view('ppd.pemangkin.index', compact('pemangkindasar'));
    }


    public function create()
    {
        $user = Auth::user();

        $perkaras = Perkarautama::all();
        $fokuss = Fokusutama::all();


        // $list= Kategori::all();
        return view('ppd.pemangkin.create', compact('user', 'perkaras', 'fokuss'));
    }

    public function store(StorePemangkindasarRequest $request)
    {
        $pemangkindasar = Pemangkindasar::create($request->all());
        return redirect()->route('pemangkin.index');
    }

    public function show(Pemangkindasar $pemangkindasar)
    {
        return view('ppd.pemangkin.show', compact('pemangkindasar'));
    }

    public function edit($id)
    {
        $pemangkindasar = Pemangkindasar::find($id);
        $perkaras = Perkarautama::all();
        $fokuss = Fokusutama::all();

        return view('ppd.pemangkin.edit', compact('pemangkindasar', 'perkaras', 'fokuss'));
    }

    public function update(UpdatePemangkindasarRequest $request, $id)
    {

        $pemangkindasar = Pemangkindasar::find($id);

        $pemangkindasar->update($request->all());
        // dd($pemangkindasar);
        return redirect()->route('pemangkin.index');
    }

    public function destroy($id)
    {
        $pemangkindasar = Pemangkindasar::find($id);
        $pemangkindasar->delete();

        return back();
    }
}
