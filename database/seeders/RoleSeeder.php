<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
            'roleId' => Str::orderedUuid(),
            'name' => 'Admin',
            'code' => strtolower('Admin')
        ]);
        Role::create([
            'roleId' => Str::orderedUuid(),
            'name' => 'Surveyor',
            'code' => strtolower('Surveyor')
        ]);
    }
}
