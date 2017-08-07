<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Input;
use App\KategoriArticleModel;
use DB;

class categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$category = DB::table("category")->get();
        $category = KategoriArticleModel::get();
        return view("admin.category.list", compact("category"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = KategoriArticleModel::get();
        return view("admin.category.add", compact("category"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item =  new KategoriArticleModel;
        $this->validate($request,[
                'category' => 'required', 
            ]); 
        $item->category = $request->category;
        $item->slug = str_slug($request->category,'-');
        
        $item->save();
        return redirect("/admin/category");
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
        $data = KategoriArticleModel::find($id);
        $category = KategoriArticleModel::get();
        return view("admin.category.edit", compact("category", "data"));
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
        $item = KategoriArticleModel::find($id);
        $this->validate($request,[
                'category' => 'required', 
            ]); 
        $item->category = $request->category;
        $item->save();
        return redirect("/admin/category");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = KategoriArticleModel::find($id);
        //$item->delete();
        $item->Delete();
        return redirect('/admin/category');
        //return $id;
    }

    public function trash()
    {
        $item = KategoriArticleModel::onlyTrashed()->get();
        return view('admin.category.trash', compact('item'));
    }


    public function restore($id)
    {
        KategoriArticleModel::withTrashed()->where('id','=',$id)->restore();
        return redirect()->back();

    }

    public function permanentDelete($id)
    {
        $dt = KategoriArticleModel::withTrashed()->where('id','=',$id)->first();
        $dt->forceDelete();
        return redirect()->back();
    }
}
