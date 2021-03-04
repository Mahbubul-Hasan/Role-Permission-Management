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
        $role = Role::create(['name' => 'Super Admin', 'guard_name' => 'admin']);

        $permissions = [
            [
                'group_name' => 'dashboard',
                'permissions' => [
                    'dashboard.index'
                ],
            ],
            [
                'group_name' => 'blog',
                'permissions' => [
                    'blog.index',
                    'blog.create',
                    'blog.edit',
                    'blog.show',
                    'blog.delete',
                ],
            ],
            [
                'group_name' => 'admin',
                'permissions' => [
                    'admin.index',
                    'admin.create',
                    'admin.edit',
                    'admin.show',
                    'admin.delete',
                ],
            ],
            [
                'group_name' => 'profile',
                'permissions' => [
                    'profile.index',
                    'profile.create',
                    'profile.edit',
                    'profile.show',
                    'profile.delete',
                ],
            ],
            [
                'group_name' => 'role',
                'permissions' => [
                    'role.index',
                    'role.create',
                    'role.edit',
                    'role.show',
                    'role.delete',
                ],
            ],
        ];

        for ($i = 0; $i < count($permissions); $i++) {
            for ($j = 0; $j < count($permissions[$i]['permissions']); $j++) {
                $permission = Permission::create([
                    'name'       => $permissions[$i]['permissions'][$j],
                    'group_name' => $permissions[$i]['group_name'],
                    'guard_name' => 'admin',
                ]);
                $role->givePermissionTo($permission);
            }
        }
    }
}
