<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class MPBController extends Controller
{
    public function index()
    {
        $users = User::role('MPB')->get();
        return view('mpb.thrust.mpb_view', compact('users'));
    }

    public function edit($id)
    {
        $users = User::find($id);

        return view('mpb.thrust.mpb', [
            'users' => $users,


        ]);
    }

    public function thrust(Request $request, $id)
    {

        $users = User::find($id);
        $users->update($request->all());
        $users->thrust1 = $request->thrust1;
        $users->thrust2 = $request->thrust2;
        $users->thrust3 = $request->thrust3;
        $users->thrust4 = $request->thrust4;
        $users->thrust5 = $request->thrust5;

        $users->save();
        // dd('jadi');

        // return back();
        return redirect()->to('MPB/mpb_view');
    }
}
