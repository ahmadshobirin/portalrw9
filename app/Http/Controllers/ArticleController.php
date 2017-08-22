<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use App\ArticleModel;
use App\KategoriArticleModel;
use DB;
use File;
use Image;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //ini contoh untuk join mas, jangan lupa di ->get()
        $article = ArticleModel::join('category', 'category.id', '=', 'article.category')
                ->select('article.id', 'article.title', 'article.images', 
                'article.description', 'article.content', 'article.view', 'category.category')
                ->get();

        //ini untuk count() tanpa ->get()
        $total = ArticleModel::count();

        //ini untuk ngecek berhasil gak querynya
        dd($article);

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
        //dd($request->images);
        $this->validate($request,[
                'category' => 'required|not_in:--Kategori--', 
                'title' => 'required', 
                'images' => 'required|image|mimes:jpeg,bmp,png,jpg', 
                'description' => 'required',
                'content' => 'required',
            ]);      
        $item =  new ArticleModel;
        $item->user_id = auth()->user()->id;
        $item->category = $request->category;
        $item->title = $request->title;
        $item->slug = str_slug($request->title,'-');
        // $path = $request->file('images')->store('public/img');
        // $item->images = $request->file('images')->hashName();
        if($request->hasFile('images')){ 
            $file = $request->file('images');
            $filename = time().'-'.$file->getClientOriginalName();
            $location = public_path('images/'.$filename);
            Image::make($file)->resize(800,400)->save($location);
        }
        //$images->move('images/',$filename);
        $item->images = $filename;
        $item->view = 0;
        $item->description = $request->description;
        $item->content = $request->content;
        //dd($item);
        $item->save();
        return redirect('/admin/article');
        //return $request->file('images')->getClientOriginalName();
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
        $category = KategoriArticleModel::select('id','category')->get();
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
        $this->validate($request,[
                'category' => 'required|not_in:--Kategori--',
                'title' => 'required', 
                'images' => 'image', 
                'description' => 'required',
                'content' => 'required',
            ]); 
        $item = ArticleModel::find($id);
        $item->category = $request->category;
        $item->title = $request->title;
        $item->description = $request->description;
        $item->content = $request->content;
        if($request->hasFile('images'))
        {
            $file = $request->file('images');
            $filename = time().'-'.$file->getClientOriginalName();
            $location = public_path('images/'.$filename);
            Image::make($file)->resize(800,400)->save($location);
            $oldFile = $item->images;

            $item->images = $filename;

            File::delete(public_path('images/'.$oldFile));
        }
        //dd($item);
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
        $item = ArticleModel::join('category', 'category.id', '=', 'article.category')
                ->onlyTrashed()
                ->get();
        return view('admin.article.trash', compact('item', 'category'));
    }


    public function restore($id)
    {
        ArticleModel::withTrashed()->where('id','=',$id)->restore();
        return redirect()->back();

    }

    public function permanentDelete($id)
    {
        $articleDelete = ArticleModel::withTrashed()->where('id','=',$id)->first();
        @unlink(public_path('images/'.$articleDelete->images));      
        $articleDelete->forceDelete();
        return redirect()->back();
    }
}
