<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */


    public function create()
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        // if (!Auth::user()->status) {

        //     $request->authenticate();

        //     $request->session()->regenerate();

        //     return redirect()->intended(RouteServiceProvider::HOME);
        // } else {
        //     Auth::logout();
        //     return redirect('login')->withErrors(['Akaun tidak Aktif']);
        // }


        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::HOME);
    }

    // public function store(LoginRequest $request)
    // {
    //     // $user = User::where('email', $request->email)->first();
    //     $user = User::all();

    //     if ($user->status) {
    //         $request->authenticate();
    //         $request->session()->regenerate();
    //         return redirect()->intended(RouteServiceProvider::HOME);
    //     } else {
    //         // Alert::error('Pengguna Tidak Aktif', 'Anda tidak dapat masuk ke sistem kerana tidak aktif');
    //         return back();
    //     }
    // }



    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
