<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use App\GalleryModel;
use App\AlbumModel;
use Image;
use File;
use DB;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $dataAlbum = AlbumModel::paginate(12);
        // $jumlahFoto = DB::table('galleries')->where('folder_id', '=', 16)->count();
        // dd($jumlahFoto);
        return view('admin.album.list', compact('dataAlbum'));
        // $galleries = GalleryModel::get();
        // return view('admin.gallery.list', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    // public function createalbum()
    // {
    //     return view('admin.album.add');
    // }

    public function create()
    {
        return view('admin.album.add');
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $folderid = $request->folder_id;
        $this->validate($request, [
                'images' => 'required',
                'images.*' =>'image|mimes:jpg,jpeg,png,bmp',
            ]);
        // $store = new GalleryModel;
        if($request->hasFile('images')){
            foreach ($request->images as $images) {
                $filename = time().'-'.$images->getClientOriginalName();
                $location = public_path('images/gallery/'.$filename);
                Image::make($images)->save($location);
                GalleryModel::create([
                    'folder_id' => $folderid,
                    'images' => $filename
                ]);
            }            
        }
        return redirect()->back();
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
        $galleries = GalleryModel::where('folder_id', '=', $id)->get();
        return view('admin.gallery.list', compact('galleries', 'id'));
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
    public function destroy(Request $request, $id)
    {
        $destroy = GalleryModel::find($id)->delete();
        return redirect()->back();
    }

    public function multipleDestroy(Request $request)
    {
    
        foreach ($request->id as $key => $value) {
            // echo $value."<br>";
            $galleryDelete = GalleryModel::where('id', '=', $value)->delete();
        }
        return redirect('/admin/gallery');
    }

    public function multipleTrash(Request $request)
    {
        foreach ($request->id as $key => $value) {
            $galleryTrash = GalleryModel::withTrashed()->where('id','=',$value)->first();
                @unlink(public_path('images/gallery/'.$galleryTrash->images));
            $galleryTrash->forceDelete();
        }
        return redirect('/admin/gallerytrash/'.$galleryTrash->folder_id);
    }

    public function trash($id)
    {
        $trash = GalleryModel::onlyTrashed()->where('folder_id', '=', $id)->get();
        return view('admin.gallery.trash', compact('trash', 'id'));
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

    public function storealbum(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|max:25',
        ]);
        $album = new AlbumModel;
        $album->nama = $request->nama;
        $album->save();

        return redirect('/admin/gallery');
    }

    public function destroyAlbum(Request $request, $id)
    {
        $destroy = AlbumModel::find($id)->delete();
        return redirect()->back();
    }

    public function folderTrash(){
        $albumFolderTrash = AlbumModel::onlyTrashed()->paginate(12);
        return view('admin.album.trash', compact('albumFolderTrash'));
    }

    public function permanentDeleteAlbum($id)
    {
        $albumFolderDelete = AlbumModel::withTrashed()->where('id', '=', $id)->first();
        // dd($albumFolderDelete);
        $albumFolderDelete->forceDelete();
        return redirect()->back();
    }

    public function restoreFolder($id)
    {
        AlbumModel::where('id', '=', $id)->restore();
        return redirect()->back();
    }
}
