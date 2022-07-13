<?php

namespace Database\Seeders;

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

        // create permissions
        // Permission::create(['name' => 'view sidebar']);
        // Permission::create(['name' => 'delete articles']);
        // Permission::create(['name' => 'publish articles']);
        // Permission::create(['name' => 'unpublish articles']);

        // create roles and assign existing permissions
        $role1 = Role::create(['name' => 'bahagian']);
        // $role1->givePermissionTo('view sidebar');
        // $role1->givePermissionTo('delete articles');

        $role2 = Role::create(['name' => 'kementerian']);
        // $role2->givePermissionTo('publish articles');
        // $role2->givePermissionTo('unpublish articles');

        $role3 = Role::create(['name' => 'menteri']);
        // $role3->givePermissionTo('publish articles');
        // $role3->givePermissionTo('unpublish articles');

        $role4 = Role::create(['name' => 'pm']);
        // $role4->givePermissionTo('publish articles');
        // $role4->givePermissionTo('unpublish articles');

        $role5 = Role::create(['name' => 'admin']);

        // gets all permissions via Gate::before rule; see AuthServiceProvider

        // create demo users
        $user = \App\Models\User::factory()->create([
            'name' => 'Adwa Najmi',
            'email' => 'adwa@adwa.com',
            'password' => Hash::make('adwaadwa'),

        ]);
        $user->assignRole($role1);

        $user = \App\Models\User::factory()->create([
            'name' => 'Amin Hashim',
            'email' => 'amin@amin.com',
            'password' => Hash::make('aminamin'),


        ]);
        $user->assignRole($role2);

        $user = \App\Models\User::factory()->create([
            'name' => 'Kementerian',
            'email' => 'menteri@menteri.com',
            'password' => Hash::make('menterimenteri'),

        ]);
        $user->assignRole($role3);

        $user = \App\Models\User::factory()->create([
            'name' => 'Ketua Menteri',
            'email' => 'ketua@ketua.com',
            'password' => Hash::make('ketuaketua'),

        ]);
        $user->assignRole($role4);

        $user = \App\Models\User::factory()->create([
            'name' => 'Super-Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('adminadmin'),

        ]);
        $user->assignRole($role5);
    }
}
