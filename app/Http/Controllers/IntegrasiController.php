<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IntegrasiController extends Controller
{
    public function page(Request $request) {
        return view('KT.integrasi');
    }
}
