<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKeyRequest;
use App\Http\Requests\UpdateKeyRequest;
use App\Models\Key;
use App\Models\National;
use App\Models\Thrust;

use Illuminate\Support\Facades\Auth;



class KeyController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $keys = Key::where('user_id', Auth::user()->id)->get();

        $list = National::all();

        return view('mpb.key.index', compact('keys', 'list'));
    }


    public function create() {
        $user = Auth::user();


        // $list = Thrust::all();
        $national = National::where('user_id', Auth::user()->id)->get();

        return view('mpb.key.create', compact('national', 'user'));
    }


    public function store(StoreKeyRequest $request) {
        $key = Key::create($request->all());
        return redirect()->route('key.index');
    }

    public function show(Key $key) {
        return view('mpb.key.show', compact('key'));
    }


    public function edit(Key $key) {

        $user = Auth::user();

        $national = National::where('user_id', Auth::user()->id)->get();

        return view('mpb.key.edit', compact('key', 'national'));
    }


    public function update(UpdateKeyRequest $request, Key $key) {
        $key->update($request->all());
        return redirect()->route('key.index');
    }

    public function destroy(Key $key) {
        $key->delete();

        return redirect()->route('key.index')
            ->with('Berjaya', 'Berjaya dibuang');
    }
}
