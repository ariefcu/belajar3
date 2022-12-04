<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // User::create([
        //     'name' => 'Arief Cahyo Utomo',
        //     'email' => 'ariefcu@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Harits bin Arief',
        //     'email' => 'harits@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);
        
        Post::factory(20)->create();

        // Post::create([
        //     "title" => "Judul Pertama",
        //     "slug" => "judul-pertama",
        //     "excerpt" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet aspernatur ipsam, do loremque voluptatem quis incidunt quasi deleniti officiis cupiditate eligendi similique quos fuga sint error, accusantium suscipit aliquam.",
        //     "body" => "<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet aspernatur ipsam, do loremque voluptatem quis incidunt quasi deleniti officiis cupiditate eligendi similique quos fuga sint error, accusantium suscipit aliquam. Dignissimos corporis, dolore ea modi ex, voluptatibus soluta eum n atus, accusantium at id voluptas aperiam maxime assumenda rem. Nesciunt repellendus itaque corrupti nat us sapiente alias fuga facilis consectetur eum. Est, sequi obcaecati. </p><p>Velit provident rem perspi ciatis enim quibusdam hic vero placeat eum, molestias, consequatur quia atque soluta sint labore dolore mque aut? Cum dolore labore ipsa commodi odio explicabo dolor quisquam aliquam esse? </p><p>Sit et id e veniet, officiis aperiam fuga suscipit rerum minus, maxime illum corrupti non ullam enim consectetur to tam accusamus maiores sunt! Repellat aspernatur voluptatem dicta. Esse minus quo ad fugiat corrupti, pe rspiciatis eaque quasi sint dolore maiores fugit sequi facere dolorem animi laborumvoluptatibus numqua m quisquam dolorum temporibus officia nulla nihil est nisi architecto? Ea enim corporis ut facere porro</p>",
        //     "category_id" => 1,
        //     "user_id" => 1
        // ]);

        // Post::create([
        //     "title" => "Judul Kedua",
        //     "slug" => "judul-kedua",
        //     "excerpt" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet aspernatur ipsam, do loremque voluptatem quis incidunt quasi deleniti officiis cupiditate eligendi similique quos fuga sint error, accusantium suscipit aliquam.",
        //     "body" => "<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet aspernatur ipsam, do loremque voluptatem quis incidunt quasi deleniti officiis cupiditate eligendi similique quos fuga sint error, accusantium suscipit aliquam. Dignissimos corporis, dolore ea modi ex, voluptatibus soluta eum n atus, accusantium at id voluptas aperiam maxime assumenda rem. Nesciunt repellendus itaque corrupti nat us sapiente alias fuga facilis consectetur eum. Est, sequi obcaecati. </p><p>Velit provident rem perspi ciatis enim quibusdam hic vero placeat eum, molestias, consequatur quia atque soluta sint labore dolore mque aut? Cum dolore labore ipsa commodi odio explicabo dolor quisquam aliquam esse? </p><p>Sit et id e veniet, officiis aperiam fuga suscipit rerum minus, maxime illum corrupti non ullam enim consectetur to tam accusamus maiores sunt! Repellat aspernatur voluptatem dicta. Esse minus quo ad fugiat corrupti, pe rspiciatis eaque quasi sint dolore maiores fugit sequi facere dolorem animi laborumvoluptatibus numqua m quisquam dolorum temporibus officia nulla nihil est nisi architecto? Ea enim corporis ut facere porro</p>",
        //     "category_id" => 1,
        //     "user_id" => 1
        // ]);

        // Post::create([
        //     "title" => "Judul Ketiga",
        //     "slug" => "judul-ketiga",
        //     "excerpt" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet aspernatur ipsam, do loremque voluptatem quis incidunt quasi deleniti officiis cupiditate eligendi similique quos fuga sint error, accusantium suscipit aliquam.",
        //     "body" => "<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet aspernatur ipsam, do loremque voluptatem quis incidunt quasi deleniti officiis cupiditate eligendi similique quos fuga sint error, accusantium suscipit aliquam. Dignissimos corporis, dolore ea modi ex, voluptatibus soluta eum n atus, accusantium at id voluptas aperiam maxime assumenda rem. Nesciunt repellendus itaque corrupti nat us sapiente alias fuga facilis consectetur eum. Est, sequi obcaecati. </p><p>Velit provident rem perspi ciatis enim quibusdam hic vero placeat eum, molestias, consequatur quia atque soluta sint labore dolore mque aut? Cum dolore labore ipsa commodi odio explicabo dolor quisquam aliquam esse? </p><p>Sit et id e veniet, officiis aperiam fuga suscipit rerum minus, maxime illum corrupti non ullam enim consectetur to tam accusamus maiores sunt! Repellat aspernatur voluptatem dicta. Esse minus quo ad fugiat corrupti, pe rspiciatis eaque quasi sint dolore maiores fugit sequi facere dolorem animi laborumvoluptatibus numqua m quisquam dolorum temporibus officia nulla nihil est nisi architecto? Ea enim corporis ut facere porro</p>",
        //     "category_id" => 2,
        //     "user_id" => 1
        // ]);

        // Post::create([
        //     "title" => "Judul Keempat",
        //     "slug" => "judul-keempat",
        //     "excerpt" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet aspernatur ipsam, do loremque voluptatem quis incidunt quasi deleniti officiis cupiditate eligendi similique quos fuga sint error, accusantium suscipit aliquam.",
        //     "body" => "<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet aspernatur ipsam, do loremque voluptatem quis incidunt quasi deleniti officiis cupiditate eligendi similique quos fuga sint error, accusantium suscipit aliquam. Dignissimos corporis, dolore ea modi ex, voluptatibus soluta eum n atus, accusantium at id voluptas aperiam maxime assumenda rem. Nesciunt repellendus itaque corrupti nat us sapiente alias fuga facilis consectetur eum. Est, sequi obcaecati. </p><p>Velit provident rem perspi ciatis enim quibusdam hic vero placeat eum, molestias, consequatur quia atque soluta sint labore dolore mque aut? Cum dolore labore ipsa commodi odio explicabo dolor quisquam aliquam esse? </p><p>Sit et id e veniet, officiis aperiam fuga suscipit rerum minus, maxime illum corrupti non ullam enim consectetur to tam accusamus maiores sunt! Repellat aspernatur voluptatem dicta. Esse minus quo ad fugiat corrupti, pe rspiciatis eaque quasi sint dolore maiores fugit sequi facere dolorem animi laborumvoluptatibus numqua m quisquam dolorum temporibus officia nulla nihil est nisi architecto? Ea enim corporis ut facere porro</p>",
        //     "category_id" => 2,
        //     "user_id" => 2
        // ]);

    }
}