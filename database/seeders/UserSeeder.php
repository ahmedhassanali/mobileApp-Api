<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\SubCategories;
use App\Models\User;
use App\Models\UserSubCategories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        User::create([
            'name' => fake()->name(),
            'user_name' => 'ahmedhali',
            'password' => Hash::make('123456789'),
            'remember_token' => Str::random(10),
            'api_token'=> '9FWBrgm6gLFqp9mQyOm7A6nIyBvDf8giYsGmCIXk3VuDBv9vf3eFROzJ6hwn',
            'category_id'=> 1
        ]);

    }
}
