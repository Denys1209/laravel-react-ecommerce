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
        $categories = [
            // Department 1: Electronics
            [
                'name' => "Electronics",
                'department_id' => 1,
                'parent_id' => null,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            // Subcategories for Electronics
            [
                'name' => "Smartphones",
                'department_id' => 1,
                'parent_id' => 1,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => "Laptops",
                'department_id' => 1,
                'parent_id' => 1,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Department 2: Home & Kitchen
            [
                'name' => "Home & Kitchen",
                'department_id' => 2,
                'parent_id' => null,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            // Subcategories for Home & Kitchen
            [
                'name' => "Appliances",
                'department_id' => 2,
                'parent_id' => 4,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => "Cookware",
                'department_id' => 2,
                'parent_id' => 4,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Department 3: Books
            [
                'name' => "Books",
                'department_id' => 3,
                'parent_id' => null,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            // Subcategories for Books
            [
                'name' => "Fiction",
                'department_id' => 3,
                'parent_id' => 7,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => "Non-Fiction",
                'department_id' => 3,
                'parent_id' => 7,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Department 4: Clothing
            [
                'name' => "Clothing",
                'department_id' => 4,
                'parent_id' => null,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            // Subcategories for Clothing
            [
                'name' => "Men's Wear",
                'department_id' => 4,
                'parent_id' => 10,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => "Women's Wear",
                'department_id' => 4,
                'parent_id' => 10,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Department 5: Sports & Outdoors
            [
                'name' => "Sports & Outdoors",
                'department_id' => 5,
                'parent_id' => null,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            // Subcategories for Sports & Outdoors
            [
                'name' => "Exercise Equipment",
                'department_id' => 5,
                'parent_id' => 13,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => "Camping Gear",
                'department_id' => 5,
                'parent_id' => 13,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Department 6: Beauty & Health
            [
                'name' => "Beauty & Health",
                'department_id' => 6,
                'parent_id' => null,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            // Subcategories for Beauty & Health
            [
                'name' => "Skincare",
                'department_id' => 6,
                'parent_id' => 16,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => "Vitamins & Supplements",
                'department_id' => 6,
                'parent_id' => 16,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Department 7: Toys & Games
            [
                'name' => "Toys & Games",
                'department_id' => 7,
                'parent_id' => null,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            // Subcategories for Toys & Games
            [
                'name' => "Board Games",
                'department_id' => 7,
                'parent_id' => 19,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => "Action Figures",
                'department_id' => 7,
                'parent_id' => 19,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Department 8: Automotive
            [
                'name' => "Automotive",
                'department_id' => 8,
                'parent_id' => null,
                'active' => false,
                'created_at' => now(),
                'updated_at' => now()
            ],
            // Subcategories for Automotive
            [
                'name' => "Car Accessories",
                'department_id' => 8,
                'parent_id' => 22,
                'active' => false,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => "Tools & Equipment",
                'department_id' => 8,
                'parent_id' => 22,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Department 9: Office Supplies
            [
                'name' => "Office Supplies",
                'department_id' => 9,
                'parent_id' => null,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            // Subcategories for Office Supplies
            [
                'name' => "Stationery",
                'department_id' => 9,
                'parent_id' => 25,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => "Office Furniture",
                'department_id' => 9,
                'parent_id' => 25,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Department 10: Food & Grocery
            [
                'name' => "Food & Grocery",
                'department_id' => 10,
                'parent_id' => null,
                'active' => false,
                'created_at' => now(),
                'updated_at' => now()
            ],
            // Subcategories for Food & Grocery
            [
                'name' => "Snacks",
                'department_id' => 10,
                'parent_id' => 28,
                'active' => false,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => "Beverages",
                'department_id' => 10,
                'parent_id' => 28,
                'active' => false,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        DB::table('categories')->insert($categories);
    }
}
