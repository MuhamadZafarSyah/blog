<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory(3)->create();

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

        Post::factory(20)->create();


        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // $this->call([
        //     CategorySeeder::class,
        //     PostSeeder::class,
        //     UserSeeder::class
        // ]);
    }
}
