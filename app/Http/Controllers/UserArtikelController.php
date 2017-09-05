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
<<<<<<< HEAD
        $article = ArticleModel::join('category', 'category.id', '=', 'article.category')
            ->select('article.id', 'article.status','article.title', 'article.images', 
            'article.description', 'article.content', 'article.view', 'category.category')
            ->get();
        return view("users.artikel.myartikel-index", compact("article"));
        // dd('s');
=======
        $dataArtikel = DB::table('article')
                     ->select('article.*','users.id','users.name','users.email')
                     ->join('users','users.id','=','article.user_id')
                     ->where('article.user_id',auth()->user()->id)
                     ->where('users.is_admin','!=',1)
                     ->get();
        return view('users.artikel.myartikel-index',compact('dataArtikel'));
>>>>>>> 5e3201fb0f0bcf90bdaef3041da61d0c9ac6f3e6
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
<<<<<<< HEAD
        $category = KategoriArticleModel::where('category','Rembuk warga')->first();
        return view("users.artikel.myartikel-create", compact("category"));
=======
        return view("users.artikel.myartikel-create");
>>>>>>> 5e3201fb0f0bcf90bdaef3041da61d0c9ac6f3e6
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
<<<<<<< HEAD
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
=======
        //
        $this->validate($request,[ 
            'title' => 'required', 
            'images' => 'required|image|mimes:jpeg,bmp,png,jpg', 
            'description' => 'required',
            'content' => 'required',
        ]);
    //idcategory
    // $category = DB::table('category')->select('id')->where('category','=','rembug warga')->first(); 

    $item =  new ArticleModel;
    $item->user_id = auth()->user()->id;
    $item->category = 4;
    $item->title = $request->title;
    $item->slug = str_slug($request->title,'-');
    $item->description = $request->description;
    $item->content = $request->content;
    //storeimage
        if($request->hasFile('images')){ 
>>>>>>> 5e3201fb0f0bcf90bdaef3041da61d0c9ac6f3e6
            $file = $request->file('images');
            $filename = time().'-'.$file->getClientOriginalName();
            $location = public_path('images/'.$filename);
            Image::make($file)->resize(800,400)->save($location);
        }
<<<<<<< HEAD
        $store->images = $filename;
        $store->description = $request->description;
        $store->content = $request->content;
        $store->view = 0;
        $store->status = 'pending';
        $store->save();
        return redirect('/home/artikel');
=======
   
    $item->images = $filename;
    auth()->user()->is_admin != 1 ? $item->status = 'pending' : $item->status = 'aktif';
    $item->view = 0;
    $item->save();

    return redirect('/user/artikel');
>>>>>>> 5e3201fb0f0bcf90bdaef3041da61d0c9ac6f3e6
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

    public function viewAdmin()
    {
        $dataArtikel = DB::table('article')
                    ->select('article.*','users.name','users.email')
                    ->join('users','users.id','=','article.user_id')
                    ->where('users.is_admin','!=',1)
                    ->where('article.status','=','pending')
                    ->get();
        // dd($dataArtikel);
        return view('admin.article.review',compact('dataArtikel'));                    
    }

    public function detailViewAdmin($id)
    {
        $dataArtikel = ArticleModel::join('users','users.id','=','article.user_id')
                    ->select('article.*','users.name','users.email')
                    ->first();
        // dd($dataArtikel);
        return view('admin.article.detail-review',compact('dataArtikel'));
    }

    public function setStatus($id,$status)
    {
        ArticleModel::where('id','=',$id)->update([
            'status' => $status
        ]);

        return redirect('admin/view/article')->with('message','Artikel Sudah '.$status.'');
    }


}
