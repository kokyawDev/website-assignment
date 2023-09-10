<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = \App\Models\User::all();

        if($users->isEmpty()) {
            $admin = \App\Models\User::factory()->create([
                'name' => 'Admin',
                'email' => 'admin@mail.com',
                'password' => bcrypt('password'),
                'role' => 'admin'
            ]);
        }
    }
}
