<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            "name" => "Programming",
            "slug" => "programming"
        ]);

        Category::create([
            "name" => "Web design",
            "slug" => "web-design"
        ]);

        Category::create([
            "name" => "Personal",
            "slug" => "personal"
        ]);

        Category::create([
            "name" => "School",
            "slug" => "school"
        ]);
        Category::create([
            "name" => "Games",
            "slug" => "games"
        ]);
    }
}
