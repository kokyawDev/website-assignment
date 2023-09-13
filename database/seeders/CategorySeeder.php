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
                ['name' => 'beauty', 'created_at' => now(), 'updated_at' => now()],
                ['name' => 'love', 'created_at' => now(), 'updated_at' => now()],
                ['name' => 'fashion', 'created_at' => now(), 'updated_at' => now()],
                ['name' => 'makeup', 'created_at' => now(), 'updated_at' => now()],
                ['name' => 'style', 'created_at' => now(), 'updated_at' => now()],
                ['name' => 'model', 'created_at' => now(), 'updated_at' => now()],
                ['name' => 'skincare', 'created_at' => now(), 'updated_at' => now()],
            ]);
        }
    }
}
