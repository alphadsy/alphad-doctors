<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateArticle;
use App\Http\Requests\UpdateArticle;
use App\Http\Requests\UpdateDoctor;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticlesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('show', 'index');
        $this->middleware('doctor')->except('show', 'index');
    }

    // get /articles  get all articles
    public function index()
    {
        $article = Article::latest()->with('doctor.user')->get();

        return view('articles.index', ['articles' => $article]);
    }

    // get /articles/create create article page
    public function create()
    {
        return view('articles.create');
    }

    // post /articles store new article
    public function store(CreateArticle $request)
    {
        //get doctor
        $doctor = $request->user()->doctor;

        //store
        $article = $doctor->articles()->create($request->only(
            ['title', 'body', 'specialization']
        ));

        //image upload
        if ($request->hasFile('cover')) {
            $article->cover = $request->cover->store('articles');
            $article->save();
        }

        return redirect()->action('ArticlesController@show', ['article' => $article]);
    }

    // get /articles/{article} article page
    public function show(Article $article)
    {
        return view('articles.show', ['article' => $article]);
    }

    // get /articles/{article}/edit edit article page
    public function edit(Article $article)
    {
        // can user edit article
        $this->authorize('update', $article);

        return view('articles.edit', ['article' => $article]);
    }

    // patch /articles/{article} update article
    public function update(UpdateArticle $request, Article $article)
    {
        // can user edit article
        $this->authorize('update', $article);

        //update
        $article->fill($request->only(
            ['title', 'body']
        ));

        //image upload
        if ($request->hasFile('cover')) {
            Storage::delete($article->cover);
            $article->cover = $request->cover->store('articles');
        }

        $article->save();

        return redirect()->action('ArticlesController@show' , ['article' => $article]);
    }

    public function destroy($id)
    {
        //
    }

}
