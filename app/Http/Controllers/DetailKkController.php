<?php
/*
 * Created on Wed Aug 09 2017
 *
 * Copyright (c) 2017 Ahmad Shobirin
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DetailKkModel;
use App\kkModel;

class DetailKkController extends Controller
{
    public function index()
    {
        $dataDetailKk = DetailKkModel::get();
        return view('admin.detailkk.index',compact('dataDetailKk'));
    }

    public function create()
    {
        $datakk = kkModel::select('id','no_kk')->get();
        return view('admin.detailkk.create',compact('datakk'));
    }
    
    public function store(Request $request)
    {
        $store = new DetailKkModel();
        $store->kartu_keluarga = $request->kartuKeluarga;
        $store->nik = $request->nik;
        $store->nama = $request->nama;
        $store->jk = $request->jk;
        $store->tempat_lahir = $request->tempatLahir;
        $store->tanggal_lahir = $request->tanggalLahir;
        $store->pendidikan = $request->pendidikan;
        $store->jenis_pekerjaan = $request->jenisPekerjaan;
        $store->status_pernikahan = $request->statusPernikahan;
        $store->status_keluarga = $request->statusKeluarga;
        $store->kewarganegaraan = $request->kewarganegaraan;
        $store->pasport = $request->pasport;
        $store->kitap = $request->kitap;
        $store->ayah = $request->ayah;
        $store->ibu = $request->ibu;
        $store->save();

        return redirect('admin/detailkk');

    }

    public function show($nokk)
    {
        // $dataDetailKk = DetailKkModel::get();
        $dataDetailKk = DetailKkModel::where('kartu_keluarga','=',$nokk)->get();
        return view('admin.detailkk.index',compact('dataDetailKk','nokk'));
        // dd($dataDetailKk);
        // return view('admin.detailkk.index');
    }


    public function edit($id)
    {
        $dataDetailKk = DetailKkModel::find($id);
        $datakk = kkModel::select('id','no_kk')->get();
        // dd($dataDetailKk->tanggal_lahir->diffForHumans());
        return view('admin.detailkk.edit',compact('dataDetailKk','datakk'));
    }

    public function update(Request $request, $id)
    {
        $kewarganegaraan = $request->kewarganegaraan ?  $request->kewarganegaraan : '' ;
        $pasport =  $request->pasport ?  $request->pasport : '';
        $kitap =  $request->kitap ?  $request->kitap : '';
        $update = DetailKkModel::find($id);
        $update->kartu_keluarga = $request->kartuKeluarga;
        $update->nik = $request->nik;
        $update->nama = $request->nama;
        $update->jk = $request->jk;
        $update->tempat_lahir = $request->tempatLahir;
        $update->pendidikan = $request->pendidikan;
        $update->jenis_pekerjaan = $request->jenisPekerjaan;
        $update->status_pernikahan = $request->statusPernikahan;
        $update->status_keluarga = $request->statusKeluarga;
        $update->kewarganegaraan = $kewarganegaraan;
        $update->pasport = $pasport;
        $update->kitap = $kitap;
        $update->ayah = $request->ayah;
        $update->ibu = $request->ibu;
        $update->save();
        return redirect('admin/detailkk');
    }

    public function destroy($id)
    {
        DetailKkModel::find($id)->delete();
        return redirect()->back();
    }

    public function trash($nokk)

    {
        // dd($ikiaslinenokktapitakjenengnoid);
        $kepalaKeluarga = kkModel::select('kepala_keluarga')->where('no_kk','=',$nokk)->first();
        // dd($kepalaKeluarga);
        $item = DetailKkModel::onlyTrashed()->where('kartu_keluarga',$nokk)->get();
        // dd($item);
        return view('admin.detailkk.trash', compact('item','nokk','kepalaKeluarga'));
    }


    public function restore($id)
    {
        DetailKkModel::withTrashed()->where('id','=',$id)->restore();
        return redirect()->back();

    }

    public function permanentDelete($id)
    {
        $dt = DetailKkModel::withTrashed()->where('id','=',$id)->first();
        $dt->forceDelete();
        return redirect()->back();
    }
}
