<?php

namespace Blog\Http\Controllers;

use Carbon\Carbon;

use Blog\Article;
use Blog\Http\Requests;
use Blog\Http\Controllers\Controller;
use Blog\Http\Requests\CreateArticleRequest ;

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
    public function store(CreateArticleRequest $request){

        //validation
        $input=  Request::all();
        $input['published_at']=Carbon::now();
        Article::create($input);
        return redirect('articles');
    }

}
