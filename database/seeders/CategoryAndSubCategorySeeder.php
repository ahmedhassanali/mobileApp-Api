<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\SubCategories;
use App\Models\UserSubCategories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryAndSubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'development',
        ]);

        SubCategories::create([
            'name' => 'front-end',
            'category_id' => 1
        ]);

        SubCategories::create([
            'name' => 'backend-end',
            'category_id' => 1
        ]);

        SubCategories::create([
            'name' => 'UI',
            'category_id' => 1
        ]);
    }
}
