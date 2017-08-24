<?php
/*
 * Created on Wed Aug 09 2017
 *
 * Copyright (c) 2017 Ahmad Shobirin
 */


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kkModel;
use DB;
use Yajra\Datatables\Datatables;
use Response;

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
        // dd($request->data[0]['nik']);
        DB::beginTransaction();
        try {
             DB::table('kartu_keluarga')->insert([
                'no_kk' => $request->no_kk,
                'kepala_keluarga' => $request->kepala_keluarga,
                'rt' => $request->rt,
                'rw' => $request->rw,
                'kodepos'    => $request->kodepos,
                'desa_kelurahan' => $request->desa_kelurahan,
                'kecamatan' => $request->kecamatan,
                'kabupaten_kota' => $request->kabupaten_kota,
                'provinsi'   => $request->provinsi,
                'keluar_tgl' => $request->keluarTanggal,
                'alamat'     => $request->alamat,
            ]);

            for($x=0; $x < count($request->data); $x++){

                DB::table('detail_kartu_keluarga')->insert([
                    'kartu_keluarga' => $request->no_kk,
                    'nik'   => $request->data[$x]['nik'],
                    'nama'  => $request->data[$x]['nama'],
                    'jk'    => $request->data[$x]['jk'],
                    'tempat_lahir'      => $request->data[$x]['tpt_lahir'],
                    'tanggal_lahir'     => $request->data[$x]['tgl_lahir'],
                    'jenis_pekerjaan'   => $request->data[$x]['pendidikan'],
                    'status_pernikahan' => $request->data[$x]['statusPernikahan'],
                    'status_keluarga'   => $request->data[$x]['statusKeluarga'],
                    'kewarganegaraan'   => $request->data[$x]['kewarganegaraan'],
                    'pendidikan'        => $request->data[$x]['pendidikan'],
                    'pasport'   => $request->data[$x]['pasport'],
                    'kitap'     => $request->data[$x]['kitap'],
                    'ayah'      => $request->data[$x]['ayah'],
                    'ibu'       => $request->data[$x]['ibu'],
                ]);
                // echo $request->data[$x]['nik']."<br>";
            }
            DB::commit();
            $success = true;
        } catch (\Exception $e) {
            $success = false;
            DB::rollback();
        }

        if ($success) { return 'success';}
        else { return 'gagal';} 
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

    public function tambahSatu()
    {
        // dd('df');
        return view('admin.kartu_keluarga.add_satu');
    }

    public function simpanSatu(request $request)
    {
         DB::beginTransaction();
        try {
             DB::table('kartu_keluarga')->insert([
                'no_kk' => $request->no_kk,
                'kepala_keluarga' => $request->kepala_keluarga,
                'rt' => $request->rt,
                'rw' => $request->rw,
                'kodepos'    => $request->kodepos,
                'desa_kelurahan' => $request->desa_kelurahan,
                'kecamatan' => $request->kecamatan,
                'kabupaten_kota' => $request->kabupaten_kota,
                'provinsi'   => $request->provinsi,
                'keluar_tgl' => $request->keluarTanggal,
                'alamat'     => $request->alamat,
            ]);

            for($x=0; $x < count($request->data); $x++){

                DB::table('detail_kartu_keluarga')->insert([
                    'kartu_keluarga' => $request->no_kk,
                    'nik'   => $request->data[$x]['nik'],
                    'nama'  => $request->data[$x]['nama'],
                    'jk'    => $request->data[$x]['jk'],
                    'tempat_lahir'      => $request->data[$x]['tpt_lahir'],
                    'tanggal_lahir'     => $request->data[$x]['tgl_lahir'],
                    'jenis_pekerjaan'   => $request->data[$x]['pendidikan'],
                    'status_pernikahan' => $request->data[$x]['statusPernikahan'],
                    'status_keluarga'   => $request->data[$x]['statusKeluarga'],
                    'kewarganegaraan'   => $request->data[$x]['kewarganegaraan'],
                    'pendidikan'        => $request->data[$x]['pendidikan'],
                    'pasport'   => $request->data[$x]['pasport'],
                    'kitap'     => $request->data[$x]['kitap'],
                    'ayah'      => $request->data[$x]['ayah'],
                    'ibu'       => $request->data[$x]['ibu'],
                ]);
                // echo $request->data[$x]['nik']."<br>";
            }
            DB::commit();
            $success = true;
        } catch (\Exception $e) {
            $success = false;
            DB::rollback();
        }

        if ($success) { return 'success';}
        else { return 'gagal';} 

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
