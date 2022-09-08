<?php

namespace App\Imports;

use App\Models\Daerah;
use App\Models\Negeri;
use App\Models\Profil;
use Maatwebsite\Excel\Concerns\ToModel;

class ProfilImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */

    public function model(array $row)
    {
        // if (!isset($row[2]) || $row[1] == "BIL.") {
        //     return null;
        // }
        // $kir = strpos($row[2], "(KIR)");
        // $air = strpos($row[2], "(AIR)");
        // if ($kir) {
        //     $this->kategori = "KIR";
        //     return null;
        // }
        // if ($air) {
        //     $this->kategori = "AIR";
        //     return null;
        // }

        $negeri = Negeri::where('name', $row[5])->first();
        if ($negeri != null) {
            $negeri_id = $negeri->id;
        } else {
            $negeri_id = 17;
        }
        $daerah = Daerah::where('name', $row[6])->first();
        if ($daerah != null) {
            $daerah_id = $daerah->id;
        } else {
            $daerah_id = 1602;
        }

        return new Profil([
            'nama' => $row[2],
            'no_kad_pengenalan' => $row[3],
            'negeri_id' => $negeri_id,
            'daerah_id' => $daerah_id,
            'mukim' => $row[7],
            'parlimen' => $row[8],
            'dun' => $row[9],
            'kampung' => $row[10],
            'strata' => $row[27],
            'alamat1' => $row[11],
            'alamat2' => $row[12],
            'alamat3' => $row[13],
            'poskod' => $row[14],
            'jumlah_pendapatan_per_kapita' => $row[17],
            'status_miskin' => $row[4],
            'no_telefon_tetap' => $row[15],
            'no_telefon_bimbit' => $row[16],
            'umur' => $row[23],
            'jantina' => $row[24],
            'kumpulan_etnik' => $row[20],
            'kewarganegaraan' => $row[19],
            'agama' => $row[21],
            'status_perkahwinan' => $row[26],
            'taraf_sijil_tertinggi' => $row[22],
            'kemahiran_yang_dimiliki' => $row[29],
            'jenis_pekerjaan' => $row[28],
            'user_id' => auth()->id(),
            'jumlah_kasar_isi_rumah_sebulan' => $row[17],
            'current_bahagian' => 'Done',
            'kategori' => $row[0],
        ]);
    }
}
