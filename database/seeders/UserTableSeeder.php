<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (User::query()->where('role', 'admin')->doesntExist()) {
            User::query()->create([
                'name' => 'TAC Admin',
                'email' => 'gbancy@tac.com',
                'role' => 'admin',
                'password' => bcrypt('password')
            ]);
        }
    }
}
