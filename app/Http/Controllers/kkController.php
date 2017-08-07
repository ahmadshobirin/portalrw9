<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kkModel;
use Yajra\Datatables\Datatables;

class kkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kk = kkMOdel::get();
        return view("admin.kartu_keluarga.index", compact("kk"));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.kartu_keluarga.add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item =  new kkModel;
        $item->no_kk = $request->no_kk;
        $item->kepala_keluarga = $request->kepala_keluarga;
        $item->rt = $request->rt;
        $item->rw = $request->rw;
        $item->kecamatan = $request->kecamatan;
        $item->kabupaten_kota = $request->kabupaten_kota;
        $item->desa_kelurahan = $request->desa_kelurahan;
        $item->kodepos = $request->kodepos;
        $item->provinsi = $request->provinsi;
        $item->keluar_tgl = $request->keluarTanggal;
        $item->alamat = $request->alamat;
        $item->save();
        return redirect("/admin/warga");
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
        $data = kkMOdel::find($id);
        return view("admin.kartu_keluarga.edit", compact("data"));
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
        $item =  kkMOdel::find($id);
        $item->kepala_keluarga = $request->kepala_keluarga;
        $item->rt = $request->rt;
        $item->rw = $request->rw;
        $item->kecamatan = $request->kecamatan;
        $item->kabupaten_kota = $request->kabupaten_kota;
        $item->desa_kelurahan = $request->desa_kelurahan;
        $item->kodepos = $request->kodepos;
        $item->provinsi = $request->provinsi;
        $item->alamat = $request->alamat;
        $item->save();
        return redirect("/admin/warga");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = kkMOdel::find($id)->delete();
        return redirect()->back();
    }

    public function getData()
    {
        $dataKk = kkModel::select(['id','no_kk','kepala_keluarga','alamat','rt','rw','desa_kelurahan','kecamatan','kabupaten_kota','kodepos','provinsi','keluar_tgl']);
        return Datatables::of($dataKk)->make(true);
    }

    public function trash()
    {
        $item = kkModel::onlyTrashed()->get();
        return view('admin.kartu_keluarga.trash', compact('item'));
    }


    public function restore($id)
    {
        kkModel::withTrashed()->where('id','=',$id)->restore();
        return redirect()->back();

    }

    public function permanentDelete($id)
    {
        $dt = kkModel::withTrashed()->where('id','=',$id)->first();
        $dt->forceDelete();
        return redirect()->back();
    }

    private function validateInput($request) {
        $this->validate($request, [
        'nama' => 'required',
        'alamat' => 'required', 
        'nis' => 'required|numeric',
        'bapak' => 'required', 
        'ibu' => 'required', 
    ]);
    }
}
