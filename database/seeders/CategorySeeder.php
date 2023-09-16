<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = DB::table('categories')->get();

        if($categories->isEmpty()) {
            DB::table('categories')->insert([
                ['name' => 'Lip', 'created_at' => now(), 'updated_at' => now()],
                ['name' => 'Eyes', 'created_at' => now(), 'updated_at' => now()],
                ['name' => 'Beauty Tools', 'created_at' => now(), 'updated_at' => now()],
                ['name' => 'Face', 'created_at' => now(), 'updated_at' => now()],
                ['name' => 'Best Seller', 'created_at' => now(), 'updated_at' => now()],
                ['name' => 'Perfume', 'created_at' => now(), 'updated_at' => now()],
                ['name' => 'Skincare', 'created_at' => now(), 'updated_at' => now()],
            ]);
        }
    }
}
