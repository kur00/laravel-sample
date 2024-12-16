<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Comment;

class PostSeeder extends Seeder
{
    public function run()
    {
        $post = Post::create([
            'name' => 'First Post',
            'content' => '最初の投稿です',
            'user_id' => 1,
        ]);

        Comment::create([
            'author_name' => '佐藤',
            'content' => 'ナイス初投稿',
            'post_id' => $post->id,
        ]);

        Comment::create([
            'author_name' => '田中',
            'content' => '投稿ありがとうございます',
            'post_id' => $post->id,
        ]);
    }
}

