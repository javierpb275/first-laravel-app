<?php

namespace App\Http\Controllers;

class PostsController 
{
    public function show($post)
    {     
            $posts = [
                'first-post' => 'Hello, this is my first blog post!',
                'second-post' => 'And this is my second blog post!',
            ];
        
            if (!array_key_exists($post, $posts)) {
                abort(404, 'Sorry, that post was not found');
            }
        
            return view('post', [
               'post' => $posts[$post]
            ]); 
    }
}