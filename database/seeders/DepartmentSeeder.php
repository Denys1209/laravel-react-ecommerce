<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB ;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $departments = [
            [
                'name' => "Electronics",
                'slug' => 'electronics',
                'active' => true,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                'name' => "Home & Kitchen",
                'slug' => 'home-kitchen',
                'active' => true,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                'name' => "Books",
                'slug' => 'books',
                'active' => true,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                'name' => "Clothing",
                'slug' => 'clothing',
                'active' => true,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                'name' => "Sports & Outdoors",
                'slug' => 'sports-outdoors',
                'active' => true,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                'name' => "Beauty & Health",
                'slug' => 'beauty-health',
                'active' => true,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                'name' => "Toys & Games",
                'slug' => 'toys-games',
                'active' => true,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                'name' => "Automotive",
                'slug' => 'automotive',
                'active' => false,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                'name' => "Office Supplies",
                'slug' => 'office-supplies',
                'active' => true,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                'name' => "Food & Grocery",
                'slug' => 'food-grocery',
                'active' => false,
                "created_at" => now(),
                "updated_at" => now()
            ]
        ];

       DB::table('departments')->insert($departments);
    }
}
