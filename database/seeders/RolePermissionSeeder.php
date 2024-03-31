<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Assign permissions to Admin role
        $superAdminRole = Role::where('name', 'admin')->first();
        $allPermissions = Permission::all();
        $superAdminRole->syncPermissions($allPermissions);

        // Assign permissions to Editor role
        $userManagementRole = Role::where('name', 'editor')->first();
        $userManagementPermissions = Permission::whereIn('name', [
            'read', 'update'
        ])->get();
        $userManagementRole->syncPermissions($userManagementPermissions);

        // Assign permissions to Editor role
        $userManagementRole = Role::where('name', 'viewer')->first();
        $userManagementPermissions = Permission::whereIn('name', [
            'read'
        ])->get();
        $userManagementRole->syncPermissions($userManagementPermissions);
    }
}
