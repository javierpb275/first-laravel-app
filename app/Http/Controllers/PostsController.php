<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostsController 
{
    public function show($slug)
    {     
            return view('post', [
               'post' =>  Post::where('slug', $slug)->firstOrFail()
            ]); 
    }
}