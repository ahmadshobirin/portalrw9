<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FooterModel;

class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $footers = FooterModel::get();
        return view('admin.footer.index', compact('footers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.footer.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'judul' => 'required|min:4|max:35',
            'content' => 'required'
        ]);

        $create = new FooterModel();
        $create->judul = $request->judul;
        $create->slug  = str_slug($request->judul,'-');
        $create->content = $request->content;
        $create->save();
        
        $footers = FooterModel::all();
        return redirect('/admin/footer')->with('footers',$footers);
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
        $dataFooter = FooterModel::find($id);
        return view('admin.footer.edit', compact('dataFooter'));
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
                'judul' => 'min:4|max:5',
                'content' => 'min:4',
            ]);
        $update = FooterModel::find($id);
        $update->judul = $request->judul;
        $update->content = $request->content;
        $update->save();

        $footers = FooterModel::all();
        return redirect('/admin/footer')->with('footers',$footers);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = FooterModel::find($id)->delete();
        return redirect()->back();
    }

    public function trash()
    {
        $trash = FooterModel::onlyTrashed()->get();
        return view('admin.footer.trash', compact('trash'));
    }


    public function restore($id)
    {
        FooterModel::withTrashed()->where('id','=',$id)->restore();
        return redirect()->back();
    }

    public function permanentDelete($id)
    {
        $footerDelete = FooterModel::withTrashed()->where('id','=',$id)->forceDelete();
        return redirect()->back();
    }
}
