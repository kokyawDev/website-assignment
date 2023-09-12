<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = DB::table('tags')->get();

        if($tags->isEmpty()) {
            DB::table('tags')->insert([
                ['name' => 'beauty', 'is_published' => 1, 'created_at' => now(), 'updated_at' => now()],
                ['name' => 'love', 'is_published' => 1, 'created_at' => now(), 'updated_at' => now()],
                ['name' => 'fashion', 'is_published' => 1, 'created_at' => now(), 'updated_at' => now()],
                ['name' => 'makeup', 'is_published' => 1, 'created_at' => now(), 'updated_at' => now()],
                ['name' => 'style', 'is_published' => 1, 'created_at' => now(), 'updated_at' => now()],
                ['name' => 'model', 'is_published' => 1, 'created_at' => now(), 'updated_at' => now()],
                ['name' => 'skincare', 'is_published' => 1, 'created_at' => now(), 'updated_at' => now()],
            ]);
        }
    }
}
