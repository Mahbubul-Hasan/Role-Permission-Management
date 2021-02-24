<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::create(['name' => 'superadmin']);

        $permissions = [
            'dashboard.index',

            'blog.index',
            'blog.create',
            'blog.edit',
            'blog.show',
            'blog.delete',

            'admin.index',
            'admin.create',
            'admin.edit',
            'admin.show',
            'admin.delete',

            'profile.index',
            'profile.create',
            'profile.edit',
            'profile.show',
            'profile.delete',

            'role.index',
            'role.create',
            'role.edit',
            'role.show',
            'role.delete',
        ];

        foreach ($permissions as $value) {
            $permission = Permission::create(['name' => $value]);
            $role->givePermissionTo($permission);
        }
    }
}
