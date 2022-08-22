<?php

namespace App\Http\Controllers;

use App\Models\Bantuan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BantuanController extends Controller
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
        $bantuans = Bantuan::all();

        return view('kt.bantuan.index', compact('bantuans'));
    }

    public function berdasarkan_negeri()
    {
        $bantuans = Bantuan::all();

        return view('kt.bantuan.berdasarkan_negeri', compact('bantuans'));
    }

    public function senarai_ketua_kampung()
    {
        $bantuans = Bantuan::all();

        return view('kt.bantuan.senarai_ketua_kampung', compact('bantuans'));
    }

    public function senarai_kampung_menerima()
    {
        $bantuans = Bantuan::all();

        return view('kt.bantuan.senarai_kampung_menerima', compact('bantuans'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $user = Auth::user();
        return view('kt.bantuan.create', ['user' => $user]);
    }

    public function create1()
    {

        $user = Auth::user();
        return view('kt.bantuan.create1', ['user' => $user]);
    }

    public function create2()
    {

        $user = Auth::user();
        return view('kt.bantuan.create2', ['user' => $user]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bantuan  $bantuan
     * @return \Illuminate\Http\Response
     */
    public function show(Bantuan $bantuan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bantuan  $bantuan
     * @return \Illuminate\Http\Response
     */
    public function edit(Bantuan $bantuan)
    {
        return view('kt.bantuan.edit', compact('bantuan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bantuan  $bantuan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bantuan $bantuan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bantuan  $bantuan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bantuan $bantuan)
    {
        //
    }
}
