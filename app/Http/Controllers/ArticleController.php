<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use App\ArticleModel;
use App\KategoriArticleModel;
use DB;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $article = DB::table("article")->get();
//        $article = ArticleModel::get();
        $article = ArticleModel::join('category', 'category.id', '=', 'article.category')
                ->select('article.id', 'article.title', 'article.images', 'article.description', 'article.content', 'article.view', 'category.category')
                ->get();
//        dd($article);
//        $article = ArticleModel::onlyTrashed()->get();
        return view("admin.article.list", compact("article"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = KategoriArticleModel::get();
        return view("admin.article.add", compact("category"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $path = $request->file('images')->store('public/img');
        $item =  new ArticleModel;
        $item->category = $request->category;
        $item->title = $request->title;
        $item->slug = str_slug($request->title,'-');
        $item->images = "img/".$request->file('images')->hashName();
        $item->view = 0;
        $item->description = $request->description;
        $item->content = $request->content;
        $item->save();
        return redirect("/admin/article");
//        return $request->file('images')->getClientOriginalName();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = ArticleModel::find($id);
        $category = KategoriArticleModel::get();
        return view("admin.article.edit", compact("article","category"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = ArticleModel::find($id);
        $item->title = $request->title;
        $item->description = $request->description;
        $item->content = $request->content;
        $item->save();
        return redirect('/admin/article');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = ArticleModel::find($id);
        $item->Delete();
        return redirect('/admin/article');
//        return $id;
    }
}
