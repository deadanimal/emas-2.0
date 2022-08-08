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


        return view('userRole.index', [
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
        return view('userRole.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRolesandpermissionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRolesandpermissionRequest $request)
    {
        Role::create(['name' => $request->DESCRIPTION]);

        return redirect('/userRole');
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
        $roles = Role::find($id);
        $permissions = Permission::all();
        // dd($permissions);
        return view('userRole.edit', [
            'roles' => $roles,
            'permissions' => $permissions,
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
    public function update(UpdateRolesandpermissionRequest $request, Rolesandpermission $rolesandpermission, $id)
    {
        // dd('sini');
        $nama_role = Role::where('id', $id)->first();
        $nama_role = $nama_role->name;
        $role = Role::findByName($nama_role);
        $permissions = Permission::get();

        foreach ($permissions as $permission) {
            $role->revokePermissionTo($permission->name);
            $nama = str_replace(" ", "_", $permission->name);
            if ($request->$nama == "1") {
                $role->givePermissionTo($permission->name);
            }
        }

        return redirect('/userRole');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rolesandpermission  $rolesandpermission
     * @return \Illuminate\Http\Response
     */

    public function destroy($role)
    {
        $role = Role::find($role);
        $role->delete();

        return redirect('/userRole');
    }

    public function edit_menu($role_id, $permission_id)
    {
        $kebenaran = Permission::where('id', $permission_id)->first();
        return view('userRole.edit_menu', [
            'kebenaran' => $kebenaran,
            'peranan' => $role_id
        ]);
    }

    public function update_kebenaran(Request $request, $role_id, $permission_id)
    {
        $kebenaran = Permission::where('id', $permission_id)->first();
        $kebenaran->name = $request->name;
        $kebenaran->save();
        return redirect('/userRole/' . $role_id . '/edit');
    }
}
