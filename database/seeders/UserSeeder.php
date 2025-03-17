<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Enums\PermissionsEnum;
use App\Enums\RolesEnum;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            "name" => "User",
            "email" => "user@example.com"
        ])->assignRole(RolesEnum::User->value);
        User::factory()->create([
            "name" => "Vendor",
            "email" => "Vendor@example.com"
        ])->assignRole(RolesEnum::Vendor->value);
        User::factory()->create([
            "name" => "Admin",
            "email" => "Admin@example.com"
        ])->assignRole(RolesEnum::Admin->value);
    }
}
