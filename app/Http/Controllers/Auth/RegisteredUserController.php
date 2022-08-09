<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            // 'role' => 'PPD',


        ]);

        // auth()->user()->assignRole('PPD');
        $user->assignRole($request->role);

        switch ($request->role) {
            case 'PPD':
                $user->givePermissionTo('KementerianPPD');
                $user->givePermissionTo('BahagianPPD');
                $user->givePermissionTo('AgensiPPD');
                break;
            case 'MPB':
                $user->givePermissionTo('User');
                $user->givePermissionTo('Approver');
                break;
            case 'KT':
                $user->givePermissionTo('AgensiKT');
                $user->givePermissionTo('BahagianKT');
                break;

            case 'MD':
                $user->givePermissionTo('KementerianMD');
                $user->givePermissionTo('BahagianMD');
                $user->givePermissionTo('AgensiMD');
                $user->givePermissionTo('Urusetia');
                $user->givePermissionTo('EpuMD');
                break;

            case 'ED':
                $user->givePermissionTo('ICT');
                $user->givePermissionTo('EpuED');
                $user->givePermissionTo('Eksekutif');
                break;


            default:
                # code...
                break;
        }

        // $user->save();


        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
