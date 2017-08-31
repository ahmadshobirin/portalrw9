<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ArticleModel;
use App\KategoriArticleModel;

class UserArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd('s');
        return view('users.artikel.myartikel-index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = KategoriArticleModel::get();
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
        $item->user_id = auth()->user()->id;
        $store->category = $request->category;
        $store->title = $request->title;
        $item->slug = str_slug($request->title,'-');
        if($request->hasFile('images')){
            $file = $request->file('images');
            $filename = time().'-'.$file->getClientOriginalName();
            $location = public_path('images/'.$filename);
            Image::make($file)->resize(800,800)->save($location);
        }
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
        // $article = ArticleModel::find($id);
        // $category = KategoriArticleModel::select('id','category')->get();
        return view("users.artikel.myartikel-edit"/*, compact("article","category")*/);
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
        //
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
