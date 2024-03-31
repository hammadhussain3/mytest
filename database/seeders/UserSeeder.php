<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRoleId = Role::where('name', 'admin')->value('id');

        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'role_id' => $adminRoleId, // You can replace 'password' with the desired password
        ])->assignRole('admin');

        // Insert editor user

        $editorRoleId = Role::where('name', 'editor')->value('id');
        User::create([
            'name' => 'Editor',
            'email' => 'editor@gmail.com',
            'password' => Hash::make('password'),
            'role_id' => $editorRoleId, // You can replace 'password' with the desired password
        ])->assignRole('editor');

        // Insert viewer user
        $viewerRoleId = Role::where('name', 'viewer')->value('id');
        User::create([
            'name' => 'Viewer',
            'email' => 'viewer@gmail.com',
            'password' => Hash::make('password'),
            'role_id' => $viewerRoleId, // You can replace 'password' with the desired password
        ])->assignRole('viewer');
    }
}
