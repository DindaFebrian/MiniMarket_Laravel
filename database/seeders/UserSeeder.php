<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create(attributes: [
            'name' => 'Bapak Jayusman',
            'email' => 'admin@example.com',
            'password' => Hash::make(value: 'password'),
            'role' => 'admin',
        ]);

        User::create(attributes: [
            'name' => 'Manager Toko 1',
            'email' => 'manager1@example.com',
            'password' => Hash::make(value: 'password'),
            'role' => 'manager',
        ]);

        User::create(attributes: [
            'name' => 'Supervisor Toko 1',
            'email' => 'supervisor1@example.com',
            'password' => Hash::make(value: 'password'),
            'role' => 'supervisor',
        ]);

        User::create(attributes: [
            'name' => 'Kasir Toko 1',
            'email' => 'kasir1@example.com',
            'password' => Hash::make(value: 'password'),
            'role' => 'kasir',
        ]);

        User::create(attributes: [
            'name' => 'Gudang Toko 1',
            'email' => 'gudang1@example.com',
            'password' => Hash::make(value: 'password'),
            'role' => 'gudang',
        ]);
    }
}
