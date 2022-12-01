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
        } else if($request->jenis == 'penyelaras') {
            $url = 'https://spkpn.epu.gov.my/api_spkpn/emas2_penyelaras/read.php?key=fc7fccd39e45a6993be6d38b997e886e';
        } else if($request->jenis == 'penghulu_mukim') {
            $url = 'https://spkpn.epu.gov.my/api_spkpn/emas2_penghulu_mukim/read.php?key=fc7fccd39e45a6993be6d38b997e886e';
        } else if($request->jenis == 'pengerusi_jawatankuasa') {
            $url = 'https://spkpn.epu.gov.my/api_spkpn/emas2_pengerusi_jawatankuasa/read.php?key=fc7fccd39e45a6993be6d38b997e886e';
        } else if($request->jenis == 'dunparlimen') {
            $url = 'https://spkpn.epu.gov.my/api_spkpn/emas2_dunparlimen/read.php?key=fc7fccd39e45a6993be6d38b997e886e';
        } else if($request->jenis == 'mukimdaerah') {
            $url = 'https://spkpn.epu.gov.my/api_spkpn/emas2_mukimdaerah/read.php?key=fc7fccd39e45a6993be6d38b997e886e';
        }
        $response = Http::withoutVerifying()->get($url)->json();
        $records = $response['records'];
        $rows = collect();
        foreach($records as $record) {
            $new_row = collect();
            foreach($record as $key => $value) {
                $new_row->push($value);
            }
            $rows->push($new_row);
        }
        $one_record = $records[0];
        $headers = collect();
        foreach($one_record as $key => $value) {
            $headers->push($key);
        }        
        return view('KT.integrasi_result', compact('headers','rows'));
    }
}
