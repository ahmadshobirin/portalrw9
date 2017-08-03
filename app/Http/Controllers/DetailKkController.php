<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DetailKkModel;
use App\kkModel;

class DetailKkController extends Controller
{
    public function index()
    {
        $dataDetailKk = DetailKkModel::get();
        return view('detailkk.index',compact('$dataDetailKk'));
    }

    public function create()
    {
        $datakk = kkModel::select('no_kk')->get();
        return view('detailkk.create',compact('datakk'));
    }
    
    public function store(Request $request)
    {
        $store = new DetailKkModel();
        $store->kartu_keluarga = $request->kartu_keluarga;
        $store->nik = $request->nik;
        $store->nama = $request->nama;
        $store->jenis_kelamin = $request->jenisKelamin;
        $store->tempat_lahir = $request->tempatLahir;
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
        $dataDetailKk = DetailKkModel::where('kartu_keluarga','=',$nokk)->first();
        dd($dataDetailKk);
    }


    public function edit($id)
    {
        $dataDetailKk = DetailKkModel::find()
    }

}
