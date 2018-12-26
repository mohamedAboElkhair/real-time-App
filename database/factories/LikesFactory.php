<?php

use Faker\Generator as Faker;
use Illuminate\Foundation\Auth\User;
use App\Reply;

$factory->define(App\Likes::class, function (Faker $faker) {
    return [
        'user_id' => function () {
            return User::all()->random();
        },
        'reply_id' => function () {
            return Reply::all()->random();
        },
    ];
});
