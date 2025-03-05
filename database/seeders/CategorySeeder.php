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
            [
                'name' => 'Electronics',
                'department_id' => 1,
                'parent_id' => null,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Fashion',
                'department_id' => 2,
                'parent_id' => null,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Computers',
                'department_id' => 1,
                'parent_id' => 1,   // parent electronics
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Smartphones',
                'department_id' => 1,
                'parent_id' => 1,   // parent electronics
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Laptops',
                'department_id' => 1,
                'parent_id' => 3,   // parent computers
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Desktops',
                'department_id' => 1,
                'parent_id' => 3,   // parent computers
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Adroid Phones',
                'department_id' => 1,
                'parent_id' => 4,   // parent smartphones
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'iPhone',
                'department_id' => 1,
                'parent_id' => 4,   // parent smartphones
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];
        DB::table('categories')->insert($categories);
    }
}
