<?php

namespace Database\Seeders;

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
        DB::table('matlamat_sdgs')->insert([
            'matlamat' => 'Tiada Kemiskinan',
            'huraian' => '"Menamatkan kemiskinan dalam semua bentuk di mana-mana."',
        ]);
    }
}
