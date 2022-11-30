<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNationalRequest;
use App\Http\Requests\UpdateNationalRequest;
use App\Models\National;
use App\Models\Thrust;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class NationalController extends Controller
{


    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $national = National::where('user_id', Auth::user()->id)->get();

        $list = Thrust::all();

        return view('mpb.national.index', compact('national', 'list'));
    }


    public function create() {
        $user = Auth::user();


        $list = Thrust::where('user_id', Auth::user()->id)->get();



        return view('mpb.national.create', compact('list', 'user'));
    }


    public function store(StoreNationalRequest $request) {
        $national = National::create($request->all());
        return redirect()->route('national.index');
    }


    public function show(National $national) {
        return view('mpb.national.show', compact('national'));
    }

    public function edit(National $national) {
        $user = Auth::user();

        $list = Thrust::where('user_id', Auth::user()->id)->get();

        return view('mpb.national.edit', compact('national', 'list'));
    }


    public function update(UpdateNationalRequest $request, National $national) {
        $national->update($request->all());
        return redirect()->route('national.index');
    }

    public function destroy(National $national) {
        $national->delete();

        return redirect()->route('national.index')
            ->with('Berjaya', 'Berjaya dibuang');
    }
}
