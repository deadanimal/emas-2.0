<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class IntegrasiController extends Controller
{
    public function page(Request $request) {
        return view('KT.integrasi');
    }

    public function call_api(Request $request) {
        if($request->jenis == 'kampung') {
            $url = 'https://spkpn.epu.gov.my/api_spkpn/emas2_infokampung/read.php?key=fc7fccd39e45a6993be6d38b997e886e';
        }
        $response = Http::get($url);
        return view('KT.integrasi_result', compact('response'));
    }
}
