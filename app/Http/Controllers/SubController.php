<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSubRequest;
use App\Http\Requests\UpdateSubRequest;
use App\Models\Key;
use App\Models\Sub;
use Illuminate\Support\Facades\Auth;


class SubController extends Controller
{


    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $subs = Sub::where('user_id', Auth::user()->id)->get();

        $list = Key::all();

        return view('mpb.sub.index', compact('subs', 'list'));
    }


    public function create() {
        $user = Auth::user();


        $list = Key::where('user_id', Auth::user()->id)->get();

        return view('mpb.sub.create', compact('list', 'user'));
    }

    public function store(StoreSubRequest $request) {
        $sub = Sub::create($request->all());
        return redirect()->route('sub.index');
    }

    public function show(Sub $sub) {
        return view('mpb.sub.show', compact('sub'));
    }

    public function edit(Sub $sub) {
        $user = Auth::user();

        $list = Key::where('user_id', Auth::user()->id)->get();

        return view('mpb.sub.edit', compact('sub', 'list'));
    }

    public function update(UpdateSubRequest $request, Sub $sub) {
        $sub->update($request->all());
        return redirect()->route('sub.index');
    }

    public function destroy(Sub $sub) {
        $sub->delete();

        return redirect()->route('sub.index')
            ->with('Berjaya', 'Berjaya dibuang');
    }
}
