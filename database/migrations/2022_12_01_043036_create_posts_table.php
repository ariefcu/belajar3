<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('excerpt');
            $table->text('body');
            $table->timestamp('published_at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};

// Post::create([
//     "title" => "Judul Ketiga",
//     "slug" => "judul-ketiga",
//     "excerpt" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet aspernatur ipsam, do loremque voluptatem quis incidunt quasi deleniti officiis cupiditate eligendi similique quos fuga sint error, accusantium suscipit aliquam.",
//     "body" => "<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet aspernatur ipsam, do loremque voluptatem quis incidunt quasi deleniti officiis cupiditate eligendi similique quos fuga sint error, accusantium suscipit aliquam. Dignissimos corporis, dolore ea modi ex, voluptatibus soluta eum n atus, accusantium at id voluptas aperiam maxime assumenda rem. Nesciunt repellendus itaque corrupti nat us sapiente alias fuga facilis consectetur eum. Est, sequi obcaecati. </p><p>Velit provident rem perspi ciatis enim quibusdam hic vero placeat eum, molestias, consequatur quia atque soluta sint labore dolore mque aut? Cum dolore labore ipsa commodi odio explicabo dolor quisquam aliquam esse? </p><p>Sit et id e veniet, officiis aperiam fuga suscipit rerum minus, maxime illum corrupti non ullam enim consectetur to tam accusamus maiores sunt! Repellat aspernatur voluptatem dicta. Esse minus quo ad fugiat corrupti, pe rspiciatis eaque quasi sint dolore maiores fugit sequi facere dolorem animi laborumvoluptatibus numqua m quisquam dolorum temporibus officia nulla nihil est nisi architecto? Ea enim corporis ut facere porro</p>"
// ])