<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    static $blog_post = [
        [
            "title" => "judul pertama",
            "slug" => "judul-pertama",
            "body" => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem dolore nisi modi quae? Nostrum in, explicabo, magni ea pariatur porro, quasi similique optio officia dicta voluptas quidem. Beatae, sit deleniti.'
        ],

        [
            "title" => "judul kedua",
            "slug" => "judul-kedua",
            "body" => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem dolore nisi modi quae? Nostrum in, explicabo, magni ea pariatur porro, quasi similique optio officia dicta voluptas quidem. Beatae, sit deleniti.'
        ]
    ];

    public static function semua()
    {
        return collect(self::$blog_post);
    }

    public static function cari($slug)
    {
        $posts = static::semua();

        return $posts->firstWhere('slug', $slug);
    }
}
