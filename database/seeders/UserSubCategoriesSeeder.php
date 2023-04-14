<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\SubCategories;
use App\Models\UserSubCategories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSubCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
  
        UserSubCategories::create([
            'sub_categories_id' => 1,
            'user_id' => 1
        ]);

        UserSubCategories::create([
            'sub_categories_id' => 2,
            'user_id' => 1
        ]);
    }
}
