<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function createPost(Request $request) {
        $incomingFields = $request->validate([
            'text' => 'required',
            'body' => 'required'
        ]); //text means title on the db

        $incomingFields['text'] = strip_tags($incomingFields['text']);
        $incomingFields['body'] = strip_tags($incomingFields['body']);
        $incomingFields['user_id'] = auth()->id();
        Post::create($incomingFields);
        
        return redirect("/");
    }

    public function showEditScreen(Post $post) {
        if(auth()->user()->id !== $post['user_id']) {
            return redirect("/");
        }
        return view("edit-post", ['post' => $post]);
    }

    public function updatePost(Post $post, Request $request) {
        if(auth()->user()->id !== $post['user_id']) {
            return redirect("/");
        }
        $incomingFields = $request->validate([
            'text' => 'required',
            'body' => 'required'
        ]); //text means title on the db

        $incomingFields['text'] = strip_tags($incomingFields['text']);
        $incomingFields['body'] = strip_tags($incomingFields['body']);
        
        $post->update($incomingFields);
        return redirect("/");
    }
}
