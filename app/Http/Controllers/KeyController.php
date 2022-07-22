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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $keys = Key::all();

        $list = National::all();

        return view('mpb.key.index', compact('keys', 'list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();


        $list = Thrust::all();

        return view('mpb.key.create', compact('list', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreKeyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKeyRequest $request)
    {
        $key = Key::create($request->all());
        return redirect()->route('key.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Key  $key
     * @return \Illuminate\Http\Response
     */
    public function show(Key $key)
    {
        return view('mpb.key.show', compact('key'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Key  $key
     * @return \Illuminate\Http\Response
     */
    public function edit(Key $key)
    {

        $user = Auth::user();

        $list = Thrust::all();

        return view('mpb.key.edit', compact('key', 'list'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKeyRequest  $request
     * @param  \App\Models\Key  $key
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKeyRequest $request, Key $key)
    {
        $key->update($request->all());
        return redirect()->route('key.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Key  $key
     * @return \Illuminate\Http\Response
     */
    public function destroy(Key $key)
    {
        $key->delete();

        return redirect()->route('key.index')
            ->with('Berjaya', 'Berjaya dibuang');
    }
}
