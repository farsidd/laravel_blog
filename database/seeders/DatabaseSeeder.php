<?php

namespace Database\Seeders;

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

        Category::truncate();
         User::truncate();
         Post::truncate();

     $user =   User::factory()->create();

      $cat1 =  Category::create([
            'name' => "Personal",
            'slug' => "personal"
        ]);
     $cat2 =   Category::create([
            'name' => "Work",
            'slug' => "work"
        ]);
      $cat3 =  Category::create([
            'name' => "Hobbies",
            'slug' => "hobbies"
        ]);
        Post::create([
            'slug' => "my-first-post",
            'category_id' => $cat1->id,
            'user_id' => $user->id,
            'title' => "My First Post",
            'excerpt' => "my first post",
            'body' => " This is the body of the post and this is awesome because this post belongs to nothing",
        ]);

        Post::create([
            'slug' => "my-second-post",
            'category_id' => $cat2->id,
            'user_id' => $user->id,
            'title' => "My Second Post",
            'excerpt' => "my second post",
            'body' => " This is the body of the post and this is awesome because this post belongs to nothing",
        ]);

        Post::create([
            'slug' => "my-third-post",
            'category_id' => $cat3->id,
            'user_id' => $user->id,
            'title' => "My Third Post",
            'excerpt' => "my third post",
            'body' => " This is the body of the post and this is awesome because this post belongs to nothing",
        ]);

    }
}
