<?php

namespace Database\Seeders;

use App\Models\Negeri;
use Illuminate\Database\Seeder;

class NegeriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Negeri::query()->delete();

        $csvFile = fopen(public_path("lokaliti/Negeri.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== false) {
            if (!$firstline) {
                Negeri::create([
                    'ID' => $data['0'],
                    'Name' => $data['1'],
                ]);
            }
            $firstline = false;
        }

        fclose($csvFile);

    }
}
