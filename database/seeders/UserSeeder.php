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
        public function run()
    {
        // Array of roles and users
        $rolesAndUsers = [
            ['role' => 'Owner', 'name' => 'Owner User', 'email' => 'owner@example.com'],
            ['role' => 'Gudang', 'name' => 'Gudang User', 'email' => 'gudang@example.com'],
            ['role' => 'Kasir', 'name' => 'Kasir User', 'email' => 'kasir@example.com'],
            ['role' => 'Supervisor', 'name' => 'Supervisor User', 'email' => 'supervisor@example.com'],
            ['role' => 'Admin', 'name' => 'Admin User', 'email' => 'admin@example.com'],
            ['role' => 'Manager', 'name' => 'Manager User', 'email' => 'manager@example.com'],
        ];

        foreach ($rolesAndUsers as $data) {
            // Create user
            $user = User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make('password'), // Default password
            ]);

            // Assign role
            $role = Role::where('name', $data['role'])->first();
            if ($role) {
                $user->roles()->attach($role->id); // Jika role menggunakan hubungan many-to-many
            } else {
                // Jika role tidak ditemukan, buat dan assign
                $role = Role::create(['name' => $data['role']]);
                $user->roles()->attach($role->id);
            }
        }
    }
}
