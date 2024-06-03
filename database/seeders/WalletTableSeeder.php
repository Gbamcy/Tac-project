<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Wallet;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WalletTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();
        foreach ($users as $user) {
            if(Wallet::query()->where('user_id', $user->id)->doesntExist()) {
                Wallet::query()->create([
                    'user_id' => $user->id
                ]);
            }
        }
    }
}
