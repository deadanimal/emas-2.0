<?php

namespace App\Http\Controllers;

use App\Models\KemasukanData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class KemasukanDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function bahagian1()
    {
        $user = Auth::user();
        return view('kt.kemasukanData.bahagian1', ['user' => $user]);
    }

    public function bahagian2()
    {
        $user = Auth::user();
        return view('kt.kemasukanData.bahagian2', ['user' => $user]);
    }

    public function bahagian3()
    {
        $user = Auth::user();
        return view('kt.kemasukanData.bahagian3', ['user' => $user]);
    }

    public function bahagian4()
    {
        $user = Auth::user();
        return view('kt.kemasukanData.bahagian4', ['user' => $user]);
    }

    public function bahagian5()
    {
        $user = Auth::user();
        return view('kt.kemasukanData.bahagian5', ['user' => $user]);
    }

    public function bahagian6()
    {
        $user = Auth::user();
        return view('kt.kemasukanData.bahagian6', ['user' => $user]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = KemasukanData::create($request->all());
        return redirect()->route('kemasukanData.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KemasukanData  $kemasukanData
     * @return \Illuminate\Http\Response
     */
    public function show(KemasukanData $kemasukanData)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KemasukanData  $kemasukanData
     * @return \Illuminate\Http\Response
     */
    public function edit(KemasukanData $kemasukanData)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KemasukanData  $kemasukanData
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KemasukanData $kemasukanData)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KemasukanData  $kemasukanData
     * @return \Illuminate\Http\Response
     */
    public function destroy(KemasukanData $kemasukanData)
    {
        //
    }
}
