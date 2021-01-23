<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ArticlesController;

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

Route::get('/', function() {
    return view('welcome');
});

Route::get('/about', function() {
    return view('about', [
        'articles' => App\Models\Article::take(3)->latest()->get()
    ]);
});

//GET /articles is for collection
Route::get('/articles', [ArticlesController::class, 'index'])->name('articles.index');

//POST /articles is for creating a new resource
Route::get('/articles/create', [ArticlesController::class, 'create']);
Route::post('/articles', [ArticlesController::class, 'store']);

//PUT /articles/:id is for update
Route::get('/articles/{article}/edit', [ArticlesController::class, 'edit']);
Route::put('/articles/{article}', [ArticlesController::class, 'update']);

//GET /articles/:id is for a single article
Route::get('/articles/{article}', [ArticlesController::class, 'show'])->name('articles.show');


//We communicate by using the http verbs: GET, POST, PUT, DELETE

//DELETE /articles/:id is for delete



