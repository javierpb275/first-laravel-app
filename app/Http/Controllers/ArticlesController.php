<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index() {

        //Renders a list of a resource

        $articles = Article::latest()->get();

        return view('articles.index', ['articles' => $articles]);
    }

    public function show(Article $article) {

        //Shows a single resource

        return view('articles.show', ['article' => $article]);
    }

    public function create() {

        //Shows a view to create a new resource
        return view('articles.create');
       
    }

    public function store() {

        //Persists the new resource created

        Article::create($this->validateArticle());

        return redirect(route('articles.index'));
        
    }

    public function edit(Article $article) {

        //Shows a view to edit an existing resource

        //find the article associated with the id

        return view('articles.edit', compact('article'));//compact('article') = ['article' => $article]

    }

    public function update(Article $article) {

        //Persists the edited resource

        $article->update($this->validateArticle());

        return redirect($article->path());

    }

    public function destroy() {

        //Delete the resource

    }

    protected function validateArticle() {

        return request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]);
    }

}
