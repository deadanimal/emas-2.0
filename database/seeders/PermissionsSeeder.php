<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;




class PermissionsSeeder extends Seeder
{
    /**
     * Create the initial roles and permissions.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('model_has_roles')->truncate();
        DB::table('roles')->truncate();


        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        // Permission::create(['name' => 'view sidebar']);
        // Permission::create(['name' => 'delete articles']);
        // Permission::create(['name' => 'publish articles']);
        // Permission::create(['name' => 'unpublish articles']);

        // create roles and assign existing permissions
        $role1 = Role::create(['name' => 'PPD']);
        // $role1->givePermissionTo('view sidebar');
        // $role1->givePermissionTo('delete articles');

        $role2 = Role::create(['name' => 'MPB']);
        // $role2->givePermissionTo('publish articles');
        // $role2->givePermissionTo('unpublish articles');

        $role3 = Role::create(['name' => 'KT']);
        // $role3->givePermissionTo('publish articles');
        // $role3->givePermissionTo('unpublish articles');

        $role4 = Role::create(['name' => 'MD']);
        // $role4->givePermissionTo('publish articles');
        // $role4->givePermissionTo('unpublish articles');

        $role5 = Role::create(['name' => 'ED']);

        $role6 = Role::create(['name' => 'SuperAdmin']);

        // gets all permissions via Gate::before rule; see AuthServiceProvider
        $permission = Permission::create(['name' => 'KementerianPPD']);
        $permission = Permission::create(['name' => 'BahagianPPD']);
        $permission = Permission::create(['name' => 'AgensiPPD']);
        $permission = Permission::create(['name' => 'BPKP']);

        $permission = Permission::create(['name' => 'User']);
        $permission = Permission::create(['name' => 'Approver']);

        $permission = Permission::create(['name' => 'AgensiKT']);
        $permission = Permission::create(['name' => 'BahagianKT']);


        $permission = Permission::create(['name' => 'KementerianMD']);
        $permission = Permission::create(['name' => 'BahagianMD']);
        $permission = Permission::create(['name' => 'AgensiMD']);
        $permission = Permission::create(['name' => 'Urusetia']);
        $permission = Permission::create(['name' => 'EpuMD']);


        $permission = Permission::create(['name' => 'ICT']);
        $permission = Permission::create(['name' => 'EpuED']);
        $permission = Permission::create(['name' => 'Eksekutif']);



        // create demo users
        $user = User::find(1);
        $user->assignRole($role1);
        $user->givePermissionTo('KementerianPPD');
        $user->givePermissionTo('BahagianPPD');
        $user->givePermissionTo('AgensiPPD');
        $user->givePermissionTo('BPKP');


        $user = User::find(2);
        $user->assignRole($role2);
        $user->givePermissionTo('User');
        $user->givePermissionTo('Approver');


        $user = User::find(3);
        $user->assignRole($role3);
        $user->givePermissionTo('AgensiKT');
        $user->givePermissionTo('BahagianKT');


        $user = User::find(4);
        $user->assignRole($role4);
        $user->givePermissionTo('KementerianMD');
        $user->givePermissionTo('BahagianMD');
        $user->givePermissionTo('AgensiMD');
        $user->givePermissionTo('Urusetia');
        $user->givePermissionTo('EpuMD');


        $user = User::find(5);
        $user->assignRole($role5);
        $user->givePermissionTo('ICT');
        $user->givePermissionTo('EpuED');
        $user->givePermissionTo('Eksekutif');

        // $user = \App\Models\User::create([
        //     'name' => 'Super Admin User',
        //     'email' => 'admin@google.com',
        //     'password' => Hash::make('adminadmin'),
        // ]);
        // $user->assignRole($role6);

        $user = User::find(6);
        $user->assignRole([$role1,$role2,$role3,$role4,$role5]);
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
