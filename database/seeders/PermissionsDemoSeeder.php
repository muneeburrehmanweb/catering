<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionsDemoSeeder extends Seeder
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
        Permission::create(['name' => 'Subscriber Dashboard']);
        Permission::create(['name' => 'Restaurant Owner Dashboard']);
        Permission::create(['name' => 'Admin Dashboard']);

        // create roles and assign existing permissions
        $role1 = Role::create(['name' => 'subscriber']);
        $role1->givePermissionTo('Subscriber Dashboard');

        $role2 = Role::create(['name' => 'restaurant-owner']);
        $role2->givePermissionTo('Restaurant Owner Dashboard');

        $role3 = Role::create(['name' => 'admin']);
        // gets all permissions via Gate::before rule; see AuthServiceProvider

        // create demo users
        $user = \App\Models\User::factory()->create([
            'name' => 'Subscriber',
            'email' => 'subscriber@test.com',
        ]);
        $user->assignRole($role1);

        $user = \App\Models\User::factory()->create([
            'name' => 'Restaurant Owner',
            'email' => 'restaurant-owner@test.com',
        ]);
        $user->assignRole($role2);

        $user = \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@test.com',
        ]);
        $user->assignRole($role3);
    }
}