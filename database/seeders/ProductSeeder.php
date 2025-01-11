<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run()
    {
        DB::table('products')->insert([
            [
                'product_name' => 'Baju Anak',
                'price' => 75000,
                'stock' => 50,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_name' => 'Sendal Anak',
                'price' => 75000,
                'stock' => 50,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_name' => 'Sepatu Anak',
                'price' => 75000,
                'stock' => 50,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
