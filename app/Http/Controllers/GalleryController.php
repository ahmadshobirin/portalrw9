<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use App\GalleryModel;
use Image;
use File;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = GalleryModel::get();
        return view('admin.gallery.list', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gallery.add');
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
                'images' => 'required|image|mimes:jpg,jpeg,png,bmp',
            ]);
        $store = new GalleryModel;
        if($request->hasFile('images')){
            $file = $request->file('images');
            $filename = time().'-'.$file->getClientOriginalName();
            $location = public_path('images/gallery/'.$filename);
            Image::make($file)->save($location); 
        }
        $store->images = $filename;
        $store->save(); 
        return redirect('/admin/gallery');
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
        $galleries = GalleryModel::find($id);
        return view('admin.gallery.trash', compact('galleries'));
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
                'images' => 'required|image|mimes:jpg,jpeg,png,bmp',
            ]);
        $update = GalleryModel::find($id);
        if ($request->hasFile('images')) {
            $file = $request->file('images');
            $filename = time().'-'.$file->getClientOriginalName();
            $location = public_path('images/gallery/'.$filename);
            Image::make($file)->resize(800,800)->save($location);
            $oldFile = $update->images;

            $update->images = $filename;

            File::delete(public_path('images/gallery/'.$oldFile));
        }
        $update->save();
        return redirect('/admin/gallery');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = GalleryModel::find($id)->delete();
        return redirect()->back();
    }

    public function trash()
    {
        $trash = GalleryModel::onlyTrashed()->get();
        return view('admin.gallery.trash', compact('trash'));
    }


    public function restore($id)
    {
        GalleryModel::withTrashed()->where('id','=',$id)->restore();
        return redirect()->back();

    }

    public function permanentDelete($id)
    {
        $galleryDelete = GalleryModel::withTrashed()->where('id','=',$id)->first();
        @unlink(public_path('images/gallery/'.$galleryDelete->images));
        $galleryDelete->forceDelete();
        return redirect()->back();
    }
}
