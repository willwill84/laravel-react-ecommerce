<?php

namespace Database\Seeders;

use App\Models\User;
use App\Enums\RolesEnum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'User1',
            'email' => 'user1@example.com',
        ])->assignRole(RolesEnum::USER->value);
        User::factory()->create([
            'name' => 'Vendor',
            'email' => 'vendor@example.com',
        ])->assignRole(RolesEnum::VENDOR->value);
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
        ])->assignRole(RolesEnum::ADMIN->value);
    }
}
