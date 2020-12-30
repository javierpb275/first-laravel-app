<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostsController 
{
    public function show($slug)
    {     

            $post = Post::where('slug', $slug)->first();

            if (!$post) {
                abort(404);
            }
        
            return view('post', [
               'post' =>  $post
            ]); 
    }
}