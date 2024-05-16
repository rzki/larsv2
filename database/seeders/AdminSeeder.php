<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'userId' => Str::orderedUuid(),
            'role_id' => 1,
            'name' => 'Admin',
            'email' => 'admin@lars.or.id',
            'password' => Hash::make('Lars2024!')
        ]);
    }
}
