<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Arief Cahyo Utomo",
        "email" => "ariefcu@gmail.com",
        "image" => "img/brain.png"
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug"=> "judul-post-pertama",
            "author" => "Arief Cahyo Utomo",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores molestias distinctio eos tempora enim sunt nesciunt commodi dolores, aut fuga et aliquam veniam rem quod velit, exercitationem quam beatae quis? Recusandae eveniet, dolorem aperiam porro voluptate veniam est pariatur? Temporibus architecto quae eius, nisi sequi debitis quia reiciendis culpa non iste voluptatum reprehenderit quasi beatae eum accusantium! Eum voluptates distinctio similique nobis molestias amet vel dolorem vero dicta quibusdam deleniti, molestiae libero quas expedita corporis, perspiciatis, animi quam at harum!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug"=> "judul-post-kedua",
            "author" => "Harits bin Arief",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae doloribus, eligendi magnam esse odit molestias nemo, voluptatum a laborum aliquid quo iusto cupiditate tempora numquam quam obcaecati enim recusandae cumque dignissimos omnis accusantium. In veritatis maiores natus reiciendis doloremque eos numquam vero, sit ipsa vitae et, recusandae provident quas. Asperiores blanditiis rem libero alias. Laborum dolorum, sit doloribus asperiores, soluta similique veritatis incidunt culpa illo iste nemo eius explicabo suscipit architecto eum voluptatum vero omnis voluptas vel saepe aliquid eligendi quam neque atque? Quisquam corporis quam animi earum itaque laudantium, iure hic id necessitatibus tempore architecto distinctio pariatur beatae modi."
        ]
    ];
    
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

// halaman single post
Route::get('posts/{slug}', function($slug){
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug"=> "judul-post-pertama",
            "author" => "Arief Cahyo Utomo",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores molestias distinctio eos tempora enim sunt nesciunt commodi dolores, aut fuga et aliquam veniam rem quod velit, exercitationem quam beatae quis? Recusandae eveniet, dolorem aperiam porro voluptate veniam est pariatur? Temporibus architecto quae eius, nisi sequi debitis quia reiciendis culpa non iste voluptatum reprehenderit quasi beatae eum accusantium! Eum voluptates distinctio similique nobis molestias amet vel dolorem vero dicta quibusdam deleniti, molestiae libero quas expedita corporis, perspiciatis, animi quam at harum!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug"=> "judul-post-kedua",
            "author" => "Harits bin Arief",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae doloribus, eligendi magnam esse odit molestias nemo, voluptatum a laborum aliquid quo iusto cupiditate tempora numquam quam obcaecati enim recusandae cumque dignissimos omnis accusantium. In veritatis maiores natus reiciendis doloremque eos numquam vero, sit ipsa vitae et, recusandae provident quas. Asperiores blanditiis rem libero alias. Laborum dolorum, sit doloribus asperiores, soluta similique veritatis incidunt culpa illo iste nemo eius explicabo suscipit architecto eum voluptatum vero omnis voluptas vel saepe aliquid eligendi quam neque atque? Quisquam corporis quam animi earum itaque laudantium, iure hic id necessitatibus tempore architecto distinctio pariatur beatae modi."
        ]
    ];

    $new_post = [];
    foreach($blog_posts as $post) {
        if($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});