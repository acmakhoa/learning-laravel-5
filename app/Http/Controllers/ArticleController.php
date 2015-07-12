<?php

namespace Blog\Http\Controllers;

use Blog\Http\Requests\ArticleRequest;
use Carbon\Carbon;

use Blog\Article;
use Blog\Http\Requests;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){
        $articles = Article::latest('published_at')->published()->get();
        return view('articles.index',compact('articles')) ;
    }
    public function show($id){
        $article = Article::findOrFail($id);

        return view('articles.show',compact('article'));
    }
    public function create(){
        return view("articles.create");
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(ArticleRequest $request){
        $input=  $request->all();
        $input['published_at']=Carbon::now();
        Article::create($input);
        return redirect('articles');
    }

    public function edit($id){
        $article= Article::findOrFail($id);
        return view('articles.edit',compact('article'));
    }

}
