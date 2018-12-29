<?php

namespace App\Http\Controllers;

use App\Reply;

class LikesController extends Controller
{
    public function likeIt(Reply $reply)
    {
        $reply->likes()->create([
        'user_id' => 1
        ]);
    }

    public function unLikeIt(Reply $reply)
    {
        // $reply->likes()->where(['user_id', auth()->id()])->first()->delete();
        $reply->likes()->where('user_id', '1')->first()->delete();
    }
}
