<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BranchSeeder extends Seeder
{
    public function run()
    {
        DB::table('branches')->insert([
            [
                'branch_name' => 'Cabang Utama',
                'address' => 'Jl. Bandung No. 1',
                'city' => 'Bandung',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'branch_name' => 'Cabang Cianjur',
                'address' => 'Jl. Cianjur No. 5',
                'city' => 'Cianjur',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'branch_name' => 'Cabang Bogor',
                'address' => 'Jl. Bogor No. 10',
                'city' => 'Bogor',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
