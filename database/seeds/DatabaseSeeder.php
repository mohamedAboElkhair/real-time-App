<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Category;
use App\Question;
use App\Reply;
use App\Likes;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(User::class, 10)->create();
        factory(Category::class, 5)->create();
        factory(Question::class, 10)->create();
        factory(Reply::class, 50)->create()->each(function ($reply) {
            return $reply->likes()->save(factory(Likes::class)->make());
        });
    }
}
