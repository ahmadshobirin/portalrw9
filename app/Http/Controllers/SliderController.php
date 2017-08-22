<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;    
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use App\SliderModel;
use Image;
use File;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pictures = SliderModel::orderBy('status','asc')->get();
        return view("admin.slider.active_list", compact("pictures"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.add');
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
                'images' => 'required|image|mimes:jpeg,bmp,png,jpg',
                'description' => 'required|max:25',
            ]);
        $store = new SliderModel;
        if($request->hasFile('images')){ 
            $file = $request->file('images');
            $filename = time().'-'.$file->getClientOriginalName();
            $location = public_path('images/slider/'.$filename);
            Image::make($file)->resize(800,400)->save($location);
        }
        $store->images = $filename;
        $store->status = 'pasif';
        $store->description = $request->description;
        $store->link = $request->link;
        $store->save();
        return redirect('/admin/slider');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pictures = SliderModel::where('status', 'pasif')->get();
        return view('admin.slider.pasive_list', compact("pictures"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pictures = SliderModel::find($id);
        return view("admin.slider.active-edit",compact("pictures"));
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
                'images' => 'image|mimes:jpeg,bmp,png,jpg',
                'description' => 'max:25',
            ]);
        $update = SliderModel::find($id);
        if($request->hasFile('images')){ 
            $file = $request->file('images');
            $filename = time().'-'.$file->getClientOriginalName();
            $location = public_path('images/slider/'.$filename);
            Image::make($file)->resize(800,400)->save($location);
            $oldFile = $update->images;

            $update->images = $filename;

            File::delete(public_path('images/slider/'.$oldFile));
        }
        $update->description = $request->description;
        $update->link = $request->link;
        $update->save();
        return redirect('/admin/slider');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = SliderModel::find($id)->delete();
        return redirect()->back();
    }

    public function trash()
    {
        $trash = SliderModel::onlyTrashed()->get();
        return view('admin.slider.trash', compact('trash'));
    }


    public function restore($id)
    {
        SLiderModel::withTrashed()->where('id','=',$id)->restore();
        return redirect()->back();

    }

    public function permanentDelete($id)
    {
        $sliderDelete = SliderModel::withTrashed()->where('id','=',$id)->first();
        @unlink(public_path('images/slider/'.$sliderDelete->images));
        $sliderDelete->forceDelete();
        return redirect()->back();
    }

    public function setStatus($id,$status)
    {
        // dd($status);
        SliderModel::where('id','=', $id)->update(['status' => $status]);
        return redirect()->back();
    }
}
