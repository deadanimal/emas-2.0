<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSubRequest;
use App\Http\Requests\UpdateSubRequest;
use App\Models\Key;
use App\Models\Sub;
use Illuminate\Support\Facades\Auth;


class SubController extends Controller
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
        $subs = Sub::all();

        $list = Key::all();

        return view('mpb.sub.index', compact('subs', 'list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();


        $list = Key::all();

        return view('mpb.sub.create', compact('list', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSubRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSubRequest $request)
    {
        $sub = Sub::create($request->all());
        return redirect()->route('sub.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sub  $sub
     * @return \Illuminate\Http\Response
     */
    public function show(Sub $sub)
    {
        return view('mpb.sub.show', compact('sub'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sub  $sub
     * @return \Illuminate\Http\Response
     */
    public function edit(Sub $sub)
    {
        $user = Auth::user();

        $list = Key::all();

        return view('mpb.sub.edit', compact('sub', 'list'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSubRequest  $request
     * @param  \App\Models\Sub  $sub
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSubRequest $request, Sub $sub)
    {
        $sub->update($request->all());
        return redirect()->route('sub.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sub  $sub
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sub $sub)
    {
        $sub->delete();

        return redirect()->route('sub.index')
            ->with('Berjaya', 'Berjaya dibuang');
    }
}
