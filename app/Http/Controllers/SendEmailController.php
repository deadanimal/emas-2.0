<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class SendEmailController extends Controller
{
    function index() {
        return view('send_email');
    }

    function send(Request $request) {
        $this->validate($request, [
            'name'     =>  'required',
            'email'  =>  'required|email',
            'message' =>  'required'
        ]);

        $data = array(
            'name'      =>  $request->name,
            'message'   =>   $request->message
        );

        Mail::to('adwaaa@live.com')->send(new SendMail($data));
        return back()->with('success', 'Thank You! Please check your email');
    }
}
