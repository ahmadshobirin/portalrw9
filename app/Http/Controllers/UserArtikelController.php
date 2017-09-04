<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        $dataArtikel = DB::table('article')
                     ->select('article.*','users.id','users.name','users.email')
                     ->join('users','users.id','=','article.user_id')
                     ->where('article.user_id',auth()->user()->id)
                     ->where('users.is_admin','!=',1)
                     ->get();
        return view('users.artikel.myartikel-index',compact('dataArtikel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("users.artikel.myartikel-create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
            $file = $request->file('images');
            $filename = time().'-'.$file->getClientOriginalName();
            $location = public_path('images/'.$filename);
            Image::make($file)->resize(800,400)->save($location);
        }
   
    $item->images = $filename;
    auth()->user()->is_admin != 1 ? $item->status = 'pending' : $item->status = 'aktif';
    $item->view = 0;
    $item->save();

    return redirect('/user/artikel');
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
