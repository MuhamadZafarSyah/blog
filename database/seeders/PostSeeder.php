<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Post::create([
            "title" => "Programming Post",
            "id_category" => 1,
            "id_user" => 1,
            "slug" => "programming-post",
            "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora hic consequuntur eos alias quas error soluta assumenda, provident culpa maxime, magni, quibusdam obcaecati eveniet qui dolores quae sed praesentium dolore."
        ]);
        Post::create([
            "title" => "Programming Post kedua",
            "id_category" => 1,
            "id_user" => 1,
            "slug" => "programming-post-kedua",
            "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora hic consequuntur eos alias quas error soluta assumenda, provident culpa maxime, magni, quibusdam obcaecati eveniet qui dolores quae sed praesentium dolore."
        ]);
        //
        Post::create([
            "title" => "Web Design Post",
            "slug" => "web-design-post",
            "id_category" => 2,
            "id_user" => 1,
            "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora hic consequuntur eos alias quas error soluta assumenda, provident culpa maxime, magni, quibusdam obcaecati eveniet qui dolores quae sed praesentium dolore."
        ]);

        Post::create([
            "title" => "Web Design Post kedua",
            "slug" => "web-design-post-kedua",
            "id_category" => 2,
            "id_user" => 1,
            "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora hic consequuntur eos alias quas error soluta assumenda, provident culpa maxime, magni, quibusdam obcaecati eveniet qui dolores quae sed praesentium dolore."
        ]);
        Post::create([
            "title" => "Personal Post",
            "slug" => "personal-post",
            "id_category" => 3,
            "id_user" => 1,
            "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora hic consequuntur eos alias quas error soluta assumenda, provident culpa maxime, magni, quibusdam obcaecati eveniet qui dolores quae sed praesentium dolore."
        ]);
        Post::create([
            "title" => "Personal Post kedua",
            "slug" => "personal-post-kedua",
            "id_category" => 3,
            "id_user" => 1,
            "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora hic consequuntur eos alias quas error soluta assumenda, provident culpa maxime, magni, quibusdam obcaecati eveniet qui dolores quae sed praesentium dolore."
        ]);
    }
}
