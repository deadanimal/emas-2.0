<?php

namespace App\Imports;

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
        return new Profil([
            'name' => $row[0],
            'email' => $row[1],
        ]);
    }
}
