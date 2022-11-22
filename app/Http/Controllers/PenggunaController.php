<?php

namespace App\Http\Controllers;


use App\Imports\UsersImport;
use App\Models\Organisasi;
use App\Models\Pengguna;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use DataTables;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Contracts\DataTable;

class PenggunaController extends Controller
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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $role = Role::all();
        $user = User::all();


        return view('user.index', [
            'role' => $role,
            'user' => $user,
        ]);
    }

    public function index1(Request $request)
    {

        // $role = Role::all();
        // $user = User::all();

        // if ($request->ajax()) {
        //     $data = User::select('id', 'name', 'email')->get();
        //     return Datatables::of($data)->addIndexColumn()
        //         ->addColumn('status', function (User $user) {
        //             if ($user->status) {
        //                 return 'Aktif';
        //             } else {
        //                 return 'Tidak Aktif';
        //             }
        //         })
        //         ->rawColumns(['status'])
        //         ->make(true);
        // }

        // return view('user.index1', [
        //     'role' => $role,
        //     'user' => $user,
        // ]);

        return view('user.index1');
    }

    // public function index1(Request $request)
    // {
    //     // $role = Role::all();
    //     $users = User::all();

    //     // $users = User::orderBy('created_at', 'desc')->get();

    //     if ($request->ajax()) {
    //         return DataTables::collection($users)
    //             ->addIndexColumn()
    //             ->addColumn('status', function (User $user) {
    //                 if ($user->status) {
    //                     $html_button = 'Active';
    //                 } else {
    //                     $html_button = 'Not Active';
    //                 }
    //                 return $html_button;
    //             })
    //             ->addColumn('action', function (User $user) {
    //                 $url = '/ED/user/index1/' . $user->id;
    //                 $url2 = '/ED/user1/index1/' . $user->id . '/active';
    //                 if ($user->status) {
    //                     $html_button = '<a href="' . $url . '"><button class="btn btn-primary">Edit</button></a> <a href="' . $url2 . '"><button class="btn btn-danger">Inactive</button></a>';
    //                 } else {
    //                     $html_button = '<a href="' . $url . '"><button class="btn btn-primary">Edit</button></a> <a href="' . $url2 . '"><button class="btn btn-success">Active</button></a>';
    //                 }
    //                 return $html_button;
    //             })
    //             ->editColumn('created_at', function (User $user) {
    //                 return [
    //                     'display' => ($user->created_at && $user->created_at != '0000-00-00 00:00:00') ? with(new Carbon($user->created_at))->format('d F Y') : '',
    //                     'timestamp' => ($user->created_at && $user->created_at != '0000-00-00 00:00:00') ? with(new Carbon($user->created_at))->timestamp : ''
    //                 ];
    //             })
    //             ->rawColumns(['action', 'status'])
    //             ->make(true);
    //     }

    //     return view('user.index1', compact('users'));
    // }


    public function userFetchList()
    {
        $users = User::all();
        echo json_encode($users);
    }

    public function active_deactive_user($id)
    {
        $user = User::find($id);
        if ($user->status == 1) {
            $user->status = 0;
        } else {
            $user->status = 1;
        }
        if ($user->save()) {
            echo json_encode('success');
        } else {
            echo json_encode('failed');
        }
    }



    public function index_mydigital(Request $request)
    {
        // if ($request->user()->can('Urusetia')) {
        //     $user = User::all();
        // } else {

        //     $user = User::where('user_id', Auth::user()->id)->get();
        // }

        $role = Role::all();
        $user = User::role('MD')->get();


        return view('md.user.index', [
            'role' => $role,
            'user' => $user,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::all();
        $roles = Role::with('permissions')->get();
        $permissions = Permission::all();
        $organisasi = Organisasi::all();
        return view('user.create', [
            'users' => $user,
            'role' => $roles,
            'permissions' => $permissions,
            'organisasi' => $organisasi,

        ]);

        // $user->syncPermission('KementerianPPD');
    }

    public function create1()
    {
        $user = User::all();
        $role = Role::all();
        $permissions = Permission::all();

        return view('user.create1', [
            'users' => $user,
            // 'role' => $role,
            // 'permissions' => $permissions
        ]);
    }

    public function create_mydigital(Request $request)
    {



        $user = User::role('MD')->get();
        $roles = Role::with('permissions')->get();
        $permissions = Permission::all();
        return view('md.user.create', [
            'users' => $user,
            'role' => $roles,
            'permissions' => $permissions,
        ]);

        // $user->syncPermission('KementerianPPD');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePenggunaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $user = User::create($request->all());
        // dd($request->all());
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required'],
            'password_confirmation' => ['required'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'password_confirmation' => Hash::make(($request->password_confirmation)),
            'dalaman' => $request->dalaman,
            'organisasi_id' => $request->organisasi_id,


        ]);

        // dd($request->all());

        $user->assignRole($request->role);
        $user->givePermissionTo($request->permission);

        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengguna  $pengguna
     * @return \Illuminate\Http\Response
     */
    public function show(Pengguna $pengguna)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengguna  $pengguna
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::find($id);
        // $roles = Role::all();
        // $permissions = Permission::all();


        $roles = Role::with('permissions')->get();
        $permissions = Permission::all();
        $organisasi = Organisasi::all();
        return view('user.edit', [
            'users' => $users,
            'roles' => $roles,
            'permissions' => $permissions,
            'organisasi' => $organisasi,

        ]);
        // dd(gettype($users->role));
        // dd($users);
        // return view('user.edit', compact('users', 'roles', 'permissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePenggunaRequest  $request
     * @param  \App\Models\Pengguna  $pengguna
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengguna $pengguna, User $user)
    {
        // $user->revokePermissionTo('BPKP');
        // dd($user->hasPermissionTo('BPKP'));
        $user->update($request->all());
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->organisasi_id = $request->organisasi_id;

        // $user->permissions = $request->permissions;

        $user->syncRoles($request->role);
        // $user->givePermissionTo($request->permission);

        $user->syncPermissions($request->permission);

        // $user->givePermissionTo($request->permission);

        $user->save();

        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengguna  $pengguna
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('user.index')
            ->with('Berjaya', 'Keterangan berjaya dibuang');
    }

    public function set_semula_kata_laluan(Request $request, $user)
    {
        $reset_pass = User::find($user);

        $reset_pass->password = Hash::make($request->password);
        $reset_pass->save();

        echo '<script language="javascript">';
        echo 'alert("Kata laluan berjaya disetkan semula.");';
        echo "window.location.href='/carian-pengguna';";
        echo '</script>';
    }

    public function import()
    {
        Excel::import(new UsersImport, request()->file('userfile'));

        return back();
    }
}
