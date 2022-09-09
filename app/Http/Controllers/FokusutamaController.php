<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFokusutamaRequest;
use App\Http\Requests\UpdateFokusutamaRequest;
use App\Models\Fokusutama;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class FokusutamaController extends Controller
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
        // $user = auth()->user();
        // dd($user);

        // if (auth()->user()->hasRole('admin')) {
        //     dd("admin");
        // }
        // dd("bukan admin");


        // Role::create(['name'=>'admin']);

        // Permission::create(['name'=>'admin']);

        // $role =Role::findById(1);

        // $permission = Permission::findById(1);

        // $role->givePermissionTo($permission);

        $fokusutama = Fokusutama::all();
        $role = Role::all();

        return view('ppd.fokusutama.index', compact('fokusutama', 'role'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $user = Auth::user();
        return view('ppd.fokusutama.create', ['user' => $user]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFokusutamaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFokusutamaRequest $request)
    {
        $fokusutama = Fokusutama::create($request->all());
        return redirect()->route('fokusutama.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fokusutama  $fokusutama
     * @return \Illuminate\Http\Response
     */
    public function show(Fokusutama $fokusutama)
    {
        return view('ppd.fokusutama.show', compact('fokusutama'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fokusutama  $fokusutama
     * @return \Illuminate\Http\Response
     */
    public function edit(Fokusutama $fokusutama)
    {
        return view('ppd.fokusutama.edit', compact('fokusutama'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFokusutamaRequest  $request
     * @param  \App\Models\Fokusutama  $fokusutama
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFokusutamaRequest $request, Fokusutama $fokusutama)
    {
        $fokusutama->update($request->all());
        return redirect()->route('fokusutama.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fokusutama  $fokusutama
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fokusutama $fokusutama)
    {
        $fokusutama->delete();

        return redirect()->route('ppd.fokusutama.index')
            ->with('Berjaya', 'Keterangan berjaya dibuang');
    }
}
