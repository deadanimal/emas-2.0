<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRolesandpermissionRequest;
use App\Http\Requests\UpdateRolesandpermissionRequest;
use App\Models\Rolesandpermission;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;


class RolesandpermissionController extends Controller
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
        $roles = Role::all();


        return view('user.index', [
            'roles' => $roles
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRolesandpermissionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRolesandpermissionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rolesandpermission  $rolesandpermission
     * @return \Illuminate\Http\Response
     */
    public function show(Rolesandpermission $rolesandpermission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rolesandpermission  $rolesandpermission
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $peranan = Role::find($id);
        $kebenaran = Permission::all();
        // dd($kebenaran);
        return view('user.edit', [
            'peranan' => $peranan,
            'kebenaran' => $kebenaran,
            'id_kumpulan' => $id
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRolesandpermissionRequest  $request
     * @param  \App\Models\Rolesandpermission  $rolesandpermission
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRolesandpermissionRequest $request, Rolesandpermission $rolesandpermission)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rolesandpermission  $rolesandpermission
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rolesandpermission $rolesandpermission)
    {
        //
    }

    public function edit_menu($role_id, $permission_id)
    {
        $kebenaran = Permission::where('id', $permission_id)->first();
        return view('user.edit_menu', [
            'kebenaran' => $kebenaran,
            'peranan' => $role_id
        ]);
    }

    public function update_kebenaran(Request $request, $role_id, $permission_id)
    {
        $kebenaran = Permission::where('id', $permission_id)->first();
        $kebenaran->name = $request->name;
        $kebenaran->save();
        return redirect('/user/' . $role_id . '/edit');
    }
}
