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

    public function show($id) {

        //Shows a single resource

        $article = Article::find($id);

        return view('articles.show', ['article' => $article]);
    }

    public function create() {

        //Shows a view to create a new resource
       
    }

    public function store() {

        //Persists the new resource created
        
    }

    public function edit() {

        //Shows a view to edit an existing resource

    }

    public function update() {

        //Persists he edited resource

    }

    public function destroy() {

        //Delete the resource

    }

}