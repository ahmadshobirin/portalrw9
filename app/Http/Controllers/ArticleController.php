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
    //$article = DB::table("article")->get();
    //$article = ArticleModel::get();
        $article = ArticleModel::join('category', 'category.id', '=', 'article.category')
                ->select('article.id', 'article.title', 'article.images', 'article.description', 'article.content', 'article.view', 'category.category')
                ->get();
        //dd($article);
        //$article = ArticleModel::onlyTrashed()->get();
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
        $item =  new ArticleModel;
        $this->validate($request,[
                'title' => 'required', 
                'images' => 'required|image|max:1024', 
                'description' => 'required',
                'content' => 'required',
            ]);        
        $item->category = $request->category;
        $item->title = $request->title;
        $item->slug = str_slug($request->title,'-');
        $path = $request->file('images')->store('public/img');
        $item->images = "img/".$request->file('images')->hashName();
        $item->view = 0;
        $item->description = $request->description;
        $item->content = $request->content;
        $item->save();
        return redirect('/admin/article');
        return $request->file('images')->getClientOriginalName();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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
        $category = KategoriArticleModel::select('id','category')->get();;
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
        $this->validate($request,[
                'title' => 'required', 
                'images' => 'image', 
                'description' => 'required',
                'content' => 'required',
            ]); 
        $item->category = $request->category;
        if(empty($request->images)){
            $item->images = $item->images;
        }else{
            //deleteimagefunction
            $path = $request->file('images')->store('public/img');
            $item->images = "img/".$request->file('images')->hashName();
        }
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
        $item = ArticleModel::find($id)->delete();
        return redirect()->back();
    }

    public function trash()
    {
        $item = ArticleModel::onlyTrashed()->get();
        return view('admin.article.trash', compact('item'));
    }


    public function restore($id)
    {
        ArticleModel::withTrashed()->where('id','=',$id)->restore();
        return redirect()->back();

    }

    public function permanentDelete($id)
    {
        $dt = ArticleModel::withTrashed()->where('id','=',$id)->first();
        $dt->forceDelete();
        return redirect()->back();
    }
}
