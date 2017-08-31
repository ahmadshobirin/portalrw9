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

class UserArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $article = ArticleModel::join('category', 'category.id', '=', 'article.category')
            ->select('article.id', 'article.status','article.title', 'article.images', 
            'article.description', 'article.content', 'article.view', 'category.category')
            ->get();
        return view("users.artikel.myartikel-index", compact("article"));
        // dd('s');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = KategoriArticleModel::where('category','Rembuk warga')->first();
        return view("users.artikel.myartikel-create", compact("category"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
                'category' => 'required|not_in:--Kategori--', 
                'title' => 'required', 
                'images' => 'required|image|mimes:jpeg,bmp,png,jpg', 
                'description' => 'required',
                'content' => 'required',
            ]);
        $store = new ArticleModel;
        $store->user_id = auth()->user()->id;
        $store->category = $request->category;
        $store->title = $request->title;
        $store->slug = str_slug($request->title,'-');
        if($request->hasFile('images')){
            $file = $request->file('images');
            $filename = time().'-'.$file->getClientOriginalName();
            $location = public_path('images/'.$filename);
            Image::make($file)->resize(800,400)->save($location);
        }
        $store->images = $filename;
        $store->description = $request->description;
        $store->content = $request->content;
        $store->view = 0;
        $store->status = 'pending';
        $store->save();
        return redirect('/home/artikel');
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
        // dd($id);
        // dd($article);
        $category = KategoriArticleModel::select('id','category')->get();
        return view('users.artikel.myartikel-edit', compact('article','category'));
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
        $this->validate($request, [
                'title' => 'required',
                'images' => 'image',
                'description' => 'required',
                'description' => 'required',
                'content' => 'required',
            ]);
        $update = ArticleModel::find($id);
        $update->title = $request->title;
        $update->description = $request->description;
        $update->content = $request->content;
        if($request->hasFile('images')){
            $file = $request->imags;
            $filename = time().'-'.$file->getClientOriginalName();
            $location = public_path('images/'.$filename);
            Image::make($file)->resize(800,400)->save($location);
            $oldFile = $update->images;

            $update->images = $filename;

            File::delete(public_path('images/'.$oldFile));
        }
        $update->save();
        return redirect('/home/artikel');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
