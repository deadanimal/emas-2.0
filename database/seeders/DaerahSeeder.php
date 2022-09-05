<?php

namespace Database\Seeders;

use App\Models\Daerah;
use Illuminate\Database\Seeder;

class DaerahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Daerah::query()->delete();

        $csvFile = fopen(public_path("lokaliti/Daerah.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== false) {
            if (!$firstline) {
                Daerah::create([
                    'id' => $data['0'],
                    'name' => $data['1'],
                    'negeri_id' => $data['2'],
                ]);
            }
            $firstline = false;
        }

        fclose($csvFile);

    }
}
