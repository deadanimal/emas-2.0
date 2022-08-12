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
        Permission::create(['name' => 'Kementerian PPD']);
        Permission::create(['name' => 'Bahagian PPD']);
        Permission::create(['name' => 'Agensi PPD']);
        Permission::create(['name' => 'BPKP']);
        $role1->givePermissionTo('Kementerian PPD');
        $role1->givePermissionTo('Bahagian PPD');
        $role1->givePermissionTo('Agensi PPD');
        $role1->givePermissionTo('BPKP');

        $role2 = Role::create(['name' => 'MPB']);
        Permission::create(['name' => 'User']);
        Permission::create(['name' => 'Approver']);
        $role2->givePermissionTo('User');
        $role2->givePermissionTo('Approver');


        $role3 = Role::create(['name' => 'KT']);
        Permission::create(['name' => 'Agensi KT']);
        Permission::create(['name' => 'Bahagian KT']);
        $role3->givePermissionTo('Agensi KT');
        $role3->givePermissionTo('Bahagian KT');

        $role4 = Role::create(['name' => 'MD']);
        Permission::create(['name' => 'Kementerian MD']);
        Permission::create(['name' => 'Bahagian MD']);
        Permission::create(['name' => 'Agensi MD']);
        Permission::create(['name' => 'Urusetia']);
        Permission::create(['name' => 'Epu MD']);
        $role4->givePermissionTo('Kementerian MD');
        $role4->givePermissionTo('Bahagian MD');
        $role4->givePermissionTo('Agensi MD');
        $role4->givePermissionTo('Urusetia');
        $role4->givePermissionTo('Epu MD');


        $role5 = Role::create(['name' => 'ED']);
        Permission::create(['name' => 'ICT']);
        Permission::create(['name' => 'Epu ED']);
        Permission::create(['name' => 'Eksekutif']);
        $role5->givePermissionTo('ICT');
        $role5->givePermissionTo('Epu ED');
        $role5->givePermissionTo('Eksekutif');


        $role6 = Role::create(['name' => 'SuperAdmin']);
        $role6->givePermissionTo('Kementerian PPD');
        $role6->givePermissionTo('Bahagian PPD');
        $role6->givePermissionTo('Agensi PPD');
        $role6->givePermissionTo('BPKP');
        $role6->givePermissionTo('User');
        $role6->givePermissionTo('Approver');
        $role6->givePermissionTo('Agensi KT');
        $role6->givePermissionTo('Bahagian KT');
        $role6->givePermissionTo('Kementerian MD');
        $role6->givePermissionTo('Bahagian MD');
        $role6->givePermissionTo('Agensi MD');
        $role6->givePermissionTo('Urusetia');
        $role6->givePermissionTo('Epu MD');
        $role6->givePermissionTo('ICT');
        $role6->givePermissionTo('Epu ED');
        $role6->givePermissionTo('Eksekutif');


        $user = User::create([
            'name' => 'Pelan Pelaksanaan Dasar',
            'email' => 'ppd@ppd.com',
            'password' => Hash::make('12345678'),

        ]);
        $user->assignRole($role1);
        $user->givePermissionTo('Kementerian PPD');
        $user->givePermissionTo('Bahagian PPD');
        $user->givePermissionTo('Agensi PPD');
        $user->givePermissionTo('BPKP');

        $user = User::create([
            'name' => 'MPB',
            'email' => 'mpb@mpb.com',
            'password' => Hash::make('12345678'),


        ]);
        $user->assignRole($role2);
        $user->givePermissionTo('User');
        $user->givePermissionTo('Approver');

        $user = User::create([
            'name' => 'Kemiskinan Tegar',
            'email' => 'kt@kt.com',
            'password' => Hash::make('12345678'),

        ]);
        $user->assignRole($role3);
        $user->givePermissionTo('Agensi KT');
        $user->givePermissionTo('Bahagian KT');

        $user = User::create([
            'name' => 'MyDigital',
            'email' => 'md@md.com',
            'password' => Hash::make('12345678'),

        ]);
        $user->assignRole($role4);
        $user->givePermissionTo('Kementerian MD');
        $user->givePermissionTo('Bahagian MD');
        $user->givePermissionTo('Agensi MD');
        $user->givePermissionTo('Urusetia');
        $user->givePermissionTo('Epu MD');

        $user = User::create([
            'name' => 'Executive Dashboard',
            'email' => 'ed@ed.com',
            'password' => Hash::make('12345678'),

        ]);
        $user->assignRole($role5);
        $user->givePermissionTo('ICT');
        $user->givePermissionTo('Epu ED');
        $user->givePermissionTo('Eksekutif');

        $user = User::create([
            'name' => 'Super-Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('adminadmin'),

        ]);
        $user->assignRole([$role1, $role2, $role3, $role4, $role5, $role6]);
        $user->givePermissionTo('Kementerian PPD');
        $user->givePermissionTo('Bahagian PPD');
        $user->givePermissionTo('Agensi PPD');
        $user->givePermissionTo('BPKP');
        $user->givePermissionTo('User');
        $user->givePermissionTo('Approver');
        $user->givePermissionTo('Agensi KT');
        $user->givePermissionTo('Bahagian KT');
        $user->givePermissionTo('Kementerian MD');
        $user->givePermissionTo('Bahagian MD');
        $user->givePermissionTo('Agensi MD');
        $user->givePermissionTo('Urusetia');
        $user->givePermissionTo('Epu MD');
        $user->givePermissionTo('ICT');
        $user->givePermissionTo('Epu ED');
        $user->givePermissionTo('Eksekutif');



        // $user->assignRole($role6);
        // $user->assignRole([['name' => 'SuperAdmin']]);

        // $user = User::find(7);


    }
}
