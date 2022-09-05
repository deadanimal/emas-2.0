<?php

namespace Database\Seeders;

use App\Models\Kampung;
use Illuminate\Database\Seeder;

class KampungSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kampung::query()->delete();

        $csvFile = fopen(public_path("lokaliti/Kampung.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== false) {
            if (!$firstline) {
                Kampung::create([
                    'id' => $data['0'],
                    'name' => $data['1'],
                    'negeri_id' => $data['2'],
                    'daerah_id' => $data['3'],
                    'negeri_mukim_id' => $data['4'],
                ]);
            }
            $firstline = false;
        }

        fclose($csvFile);

    }
}
