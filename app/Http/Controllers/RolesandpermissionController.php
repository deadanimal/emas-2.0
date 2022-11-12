<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRolesandpermissionRequest;
use App\Http\Requests\UpdateRolesandpermissionRequest;
use App\Models\Rolesandpermission;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Assign;

class RolesandpermissionController extends Controller
{

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

    public function index1()
    {
        $roles = Role::all();
        $permissions = Permission::all();


        return view('userRole.index1', [
            'permissions' => $permissions,
            'roles' => $roles

        ]);
    }


    public function create()
    {
        return view('userRole.create');
    }

    public function create1()
    {
        $roles = Role::with('permissions')->get();
        $permissions = Permission::all();
        return view('userRole.create1', [
            'role' => $roles,
            'permissions' => $permissions,
        ]);
    }


    public function store(Request $request)
    {
        // dd($request);
        Role::create(['name' => $request->DESCRIPTION]);

        return redirect('/ED/userRole');
    }

    public function simpan(Request $request)
    {
        $permissions = Permission::create([
            'name' => $request->name,
        ]);

        $permissions->assignRole($request->role);
        $permissions->givePermissionTo($request->permission);

        return redirect('/ED/bahagian/senarai');
    }


    public function show(Rolesandpermission $rolesandpermission)
    {
        //
    }


    public function edit($id)
    {
        $roles = Role::find($id);
        $permissions = $roles->permissions()->get();
        // dd($permissions);
        return view('userRole.edit', [
            'roles' => $roles,
            'permissions' => $permissions,
        ]);
    }

    public function edit1($id)
    {
        $roles = Role::find($id);
        $permissions = Permission::find($id);

        return view('userRole.edit1', [
            'roles' => $roles,
            'permissions' => $permissions,
        ]);
    }


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

        return redirect('/ED/userRole');
    }

    public function update_permission(UpdateRolesandpermissionRequest $request, Permission $permissions, $id)
    {
        $permissions = Permission::find($id);


        $permissions->update($request->all());
        $permissions->name = $request->name;

        $permissions->save();

        return redirect('/ED/bahagian/senarai');
    }


    public function destroy($role)
    {
        $role = Role::find($role);
        $role->delete();

        return redirect('/ED/userRole');
    }

    public function destroy_permission($permission)
    {
        $permission = Permission::find($permission);
        $permission->delete();

        return redirect('/ED/bahagian/senarai');
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
        return redirect('/ED/userRole/' . $role_id . '/edit');
    }
}
