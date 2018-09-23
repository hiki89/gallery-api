<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;
use App\Comment;

class CommentController extends Controller
{
    public function store(CommentRequest $request)
    {
        return Comment::create([
            'comment' => $request->comment,
            'gallery_id' => $request->gallery_id,
            'user_id' => $request->user_id
        ])->load('user');
    }

    public function destroy($comment) {
        return Comment::destroy($comment);
    }
}