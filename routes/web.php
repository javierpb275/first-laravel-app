<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/posts/{post}', function ($post) {
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
});

