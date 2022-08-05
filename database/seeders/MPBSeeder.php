<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MPBSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::find(8);
        $user->assignRole([['name' => 'SuperAdmin']]);

        // $user->assignRole([['name' => 'PPD']]);
        // $user->assignRole([['name' => 'MPB']]);
        // $user->assignRole([['name' => 'KT']]);
        // $user->assignRole([['name' => 'MD']]);
        // $user->assignRole([['name' => 'ED']]);
        // $user->givePermissionTo('KementerianPPD');
        // $user->givePermissionTo('BahagianPPD');
        // $user->givePermissionTo('AgensiPPD');
        // $user->givePermissionTo('BPKP');

        // $user->givePermissionTo('User');
        // $user->givePermissionTo('Approver');

        // $user->givePermissionTo('AgensiKT');
        // $user->givePermissionTo('BahagianKT');

        // $user->givePermissionTo('KementerianMD');
        // $user->givePermissionTo('BahagianMD');
        // $user->givePermissionTo('AgensiMD');
        // $user->givePermissionTo('Urusetia');
        // $user->givePermissionTo('EpuMD');

        // $user->givePermissionTo('ICT');
        // $user->givePermissionTo('EpuED');
        // $user->givePermissionTo('Eksekutif');
    }
}
