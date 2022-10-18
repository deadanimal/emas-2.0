<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class MPBController extends Controller
{
    public function index()
    {
        $user = User::all();

        return view('mpb.index', [
            'user' => $user,
        ]);
    }

    public function edit($id)
    {
        $users = User::find($id);

        return view('mpb.thrust.mpb', [
            'users' => $users,


        ]);
    }

    // public function update(Request $request, User $user)
    // {

    //     $user->update($request->all());
    //     $user->thrust1 = $request->thrust1;
    //     $user->thrust2 = $request->thrust2;
    //     $user->thrust3 = $request->thrust3;
    //     $user->thrust4 = $request->thrust4;
    //     $user->thrust5 = $request->thrust5;

    //     $user->save();
    //     // dd('jadi');

    //     return back();
    // }

    public function thrust(Request $request, $id)
    {

        $user = User::find($id);
        $user->update($request->all());
        $user->thrust1 = $request->thrust1;
        $user->thrust2 = $request->thrust2;
        $user->thrust3 = $request->thrust3;
        $user->thrust4 = $request->thrust4;
        $user->thrust5 = $request->thrust5;

        $user->save();
        // dd('jadi');

        return back();
    }
}
