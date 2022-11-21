<?php

namespace Database\Seeders;

use App\Models\Sdg;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SdgSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sdg::query()->delete();

        $csvFile = fopen(public_path("sdg/Sdg.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== false) {
            if (!$firstline) {
                Sdg::create([
                    'id' => $data['0'],
                    'namaSdg' => $data['1'],
                    'keteranganSdg' => $data['2'],
                ]);
            }
            $firstline = false;
        }

        fclose($csvFile);
    }
}
