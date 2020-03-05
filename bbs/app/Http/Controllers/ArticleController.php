<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth')->except(['index', 'show']);
    }

    public function index(Request $request)
    {
        if($request->filled('keyword')){
          $keyword = $request->input('keyword');
          $message = '在庫管理アプリへようこそ[ログイン名]さん: ' . $keyword;
          $categories=Category::all();
          $articles = Article::where('content', 'like', '%' . $keyword . '%')->get();
        }else{
          $message = '在庫管理アプリへようこそ[ログイン名]さん';
          $categories=Category::all();
          $articles = Article::all();
        }
        return view('index' ,['categories' => $categories, 'message' => $message, 'articles' => $articles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $categories = Category::all()->pluck('name', 'id');
        $message = '';
        return view('new', ['categories' => $categories, 'message' => $message]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $article = new Article();
      $user = \Auth::user();

      $article->content = $request->content;
      $article->money = $request->money;
      $article->quantity = $request->quantity;
      $article->category_id = $request->category_id;
      $article->user_id = $user->id;
      $article->save();
      return redirect()->route('article.show', ['id' => $article->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id, Article $article)
    {
        $message = '商品の詳細画面 商品No.' . $id;
        $article = Article::find($id);
        $user = \Auth::user();
        if($user){
          $login_user_id = $user->id;
        } else {
          $login_user_id = '';
        }
        return view('show', ['message' => $message, 'article' => $article, 'login_user_id' => $login_user_id]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id, Article $article)
    {
      $message = '商品の編集画面 商品No.' . $id;
      $categories=Category::all()->pluck('name', 'id');
      $article = Article::find($id);
      return view('edit', ['categories' => $categories, 'message' => $message, 'article' => $article]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, Article $article)
    {
      $article = Article::find($id);

      $article->content = $request->content;
      $article->money = $request->money;
      $article->quantity = $request->quantity;
      $article->category_id = $request->category_id;
      $article->save();
      return redirect()->route('article.show', ['id' => $article->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
     public function destroy(Request $request, $id, Article $article)
     {
         $article = Article::find($id);
         $article->delete();
         return redirect('/articles');
     }
}
