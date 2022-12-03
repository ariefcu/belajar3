<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Tulisan Pertama",
            "slug"=> "judul-tulisan-pertama",
            "author" => "Arief Cahyo Utomo",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores molestias distinctio eos tempora enim sunt nesciunt commodi dolores, aut fuga et aliquam veniam rem quod velit, exercitationem quam beatae quis? Recusandae eveniet, dolorem aperiam porro voluptate veniam est pariatur? Temporibus architecto quae eius, nisi sequi debitis quia reiciendis culpa non iste voluptatum reprehenderit quasi beatae eum accusantium! Eum voluptates distinctio similique nobis molestias amet vel dolorem vero dicta quibusdam deleniti, molestiae libero quas expedita corporis, perspiciatis, animi quam at harum!"
        ],
        [
            "title" => "Judul Tulisan Kedua",
            "slug"=> "judul-tulisan-kedua",
            "author" => "Harits bin Arief",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae doloribus, eligendi magnam esse odit molestias nemo, voluptatum a laborum aliquid quo iusto cupiditate tempora numquam quam obcaecati enim recusandae cumque dignissimos omnis accusantium. In veritatis maiores natus reiciendis doloremque eos numquam vero, sit ipsa vitae et, recusandae provident quas. Asperiores blanditiis rem libero alias. Laborum dolorum, sit doloribus asperiores, soluta similique veritatis incidunt culpa illo iste nemo eius explicabo suscipit architecto eum voluptatum vero omnis voluptas vel saepe aliquid eligendi quam neque atque? Quisquam corporis quam animi earum itaque laudantium, iure hic id necessitatibus tempore architecto distinctio pariatur beatae modi."
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