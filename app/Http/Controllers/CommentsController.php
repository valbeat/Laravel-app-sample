<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function store(Request $request,Post $post) {
        $this->validate($request, [
            'body' => 'required',
        ]);
        $comment = new Comment();
        $comment->body = $request->body;
        $this->comments->save($comment);
        return redirect()->action('PostController@show',$post);
    }
}
