<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsa enim voluptatibus, vel eius culpa nam expedita qui odio animi consequatur, in dicta quas ex veniam optio ratione minima adipisci maiores. Perspiciatis corporis expedita architecto incidunt dolor officia unde voluptates dicta velit ipsam? Eligendi dolorum vel obcaecati sapiente reiciendis modi assumenda voluptatem cum dolore nobis? Eaque ut vero ex et aut, eum nam. Voluptatem itaque est facilis, excepturi voluptates aperiam assumenda eveniet magni ipsa! Illo adipisci numquam qui culpa rem possimus!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsa enim voluptatibus, vel eius culpa nam expedita qui odio animi consequatur, in dicta quas ex veniam optio ratione minima adipisci maiores. Perspiciatis corporis expedita architecto incidunt dolor officia unde voluptates dicta velit ipsam? Eligendi dolorum vel obcaecati sapiente reiciendis modi assumenda voluptatem cum dolore nobis? Eaque ut vero ex et aut, eum nam. Voluptatem itaque est facilis, excepturi voluptates aperiam assumenda eveniet magni ipsa! Illo adipisci numquam qui culpa rem possimus!"
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    
    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}