<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;
use Illuminate\Support\Facades\Hash;


class PermissionsSeeder extends Seeder
{
    /**
     * Create the initial roles and permissions.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();


        // create roles and assign existing permissions
        $role1 = Role::create(['name' => 'PPD']);
        Permission::create(['name' => 'KementerianPPD']);
        Permission::create(['name' => 'BahagianPPD']);
        Permission::create(['name' => 'AgensiPPD']);
        Permission::create(['name' => 'BPKP']);


        $role2 = Role::create(['name' => 'MPB']);
        Permission::create(['name' => 'User']);
        Permission::create(['name' => 'Approver']);


        $role3 = Role::create(['name' => 'KT']);
        Permission::create(['name' => 'AgensiKT']);
        Permission::create(['name' => 'BahagianKT']);


        $role4 = Role::create(['name' => 'MD']);
        Permission::create(['name' => 'KementerianMD']);
        Permission::create(['name' => 'BahagianMD']);
        Permission::create(['name' => 'AgensiMD']);
        Permission::create(['name' => 'Urusetia']);
        Permission::create(['name' => 'EpuMD']);


        $role5 = Role::create(['name' => 'ED']);
        Permission::create(['name' => 'ICT']);
        Permission::create(['name' => 'EpuED']);
        Permission::create(['name' => 'Eksekutif']);


        $role6 = Role::create(['name' => 'SuperAdmin']);


        $user = User::create([
            'name' => 'Pelan Pelaksanaan Dasar',
            'email' => 'adwa@adwa.com',
            'password' => Hash::make('ppd1234'),

        ]);
        $user->assignRole($role1);
        $user->givePermissionTo('KementerianPPD');
        $user->givePermissionTo('BahagianPPD');
        $user->givePermissionTo('AgensiPPD');
        $user->givePermissionTo('BPKP');

        $user = User::create([
            'name' => 'MPB',
            'email' => 'amin@amin.com',
            'password' => Hash::make('mpb1234'),


        ]);
        $user->assignRole($role2);
        $user->givePermissionTo('User');
        $user->givePermissionTo('Approver');

        $user = User::create([
            'name' => 'Kemiskinan Tegar',
            'email' => 'menteri@menteri.com',
            'password' => Hash::make('ktkt1234'),

        ]);
        $user->assignRole($role3);
        $user->givePermissionTo('AgensiKT');
        $user->givePermissionTo('BahagianKT');

        $user = User::create([
            'name' => 'MyDigital',
            'email' => 'ketua@ketua.com',
            'password' => Hash::make('mdmd1234'),

        ]);
        $user->assignRole($role4);
        $user->givePermissionTo('KementerianMD');
        $user->givePermissionTo('BahagianMD');
        $user->givePermissionTo('AgensiMD');
        $user->givePermissionTo('Urusetia');
        $user->givePermissionTo('EpuMD');

        $user = User::create([
            'name' => 'Executive Dashboard',
            'email' => 'ed@ed.com',
            'password' => Hash::make('eded1234'),

        ]);
        $user->assignRole($role5);
        $user->givePermissionTo('ICT');
        $user->givePermissionTo('EpuED');
        $user->givePermissionTo('Eksekutif');

        $user = User::create([
            'name' => 'Super-Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('adminadmin'),

        ]);
        $user->assignRole([$role1, $role2, $role3, $role4, $role5, $role6]);
        $user->givePermissionTo('KementerianPPD');
        $user->givePermissionTo('BahagianPPD');
        $user->givePermissionTo('AgensiPPD');
        $user->givePermissionTo('BPKP');
        $user->givePermissionTo('User');
        $user->givePermissionTo('Approver');
        $user->givePermissionTo('AgensiKT');
        $user->givePermissionTo('BahagianKT');
        $user->givePermissionTo('KementerianMD');
        $user->givePermissionTo('BahagianMD');
        $user->givePermissionTo('AgensiMD');
        $user->givePermissionTo('Urusetia');
        $user->givePermissionTo('EpuMD');

        // $user->assignRole($role6);
        // $user->assignRole([['name' => 'SuperAdmin']]);

        // $user = User::find(7);


    }
}
