<?php

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
        dd($request->data,$request->counter);
        DB::table('kartu_keluarga')->insert([
            'no_kk' => $request->no_kk,
            'kepala_keluarga' => $request->kepala_keluarga,
            'rt' => $request->rt,
            'rw' => $request->rw,
            'kecamatan' => $request->kecamatan,
            'kabupaten_kota' => $request->kabupaten_kota,
            'desa_kelurahan' => $request->desa_kelurahan,
            'kodepos'    => $request->kodepos,
            'provinsi'   => $request->provinsi,
            'keluar_tgl' => $request->keluarTanggal,
            'alamat'     => $request->alamat,
        ]);

        for($x=0; $x <= $request->counter; $x++)
        {

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
            //echo $request->data[$x][0]['nama']."<br>";
        }

        return 'success!';
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
       $row = 
       '<div class="row" id="content">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="Nama...">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="">Nik</label>
                        <input type="text" name="nik" class="form-control" placeholder="Nik..." onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="">Tempat Lahir</label>
                        <input type="text" name="tempatLahir" class="form-control" placeholder="Tempat lahir..">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="">Tanggal Lahir</label>
                        <input type="date" name="tanggalLahir" class="form-control" placeholder="Tanggal Lahir..." min="1800-01-01" max="2100-12-31">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Jenis Kelamin</label>
                    <div class="radio">
                        <label>
                        <input type="radio" name="jk" id="optionsRadios1" value="laki-laki" checked>
                            Laki-Laki
                        </label>
                        &nbsp;&nbsp;&nbsp;
                        <label>
                        <input type="radio" name="jk" id="optionsRadios2" value="perempuan">
                            Perempuan
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Pendidikan</label>
                    <input type="text" name="pendidikan" class="form-control" placeholder="Pendidikan...">
                </div>
            </div>
            {{--  //col-md-6  --}}
            <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Jenis Pekerjaan</label>
                        <input type="text" name="jenisPekerjaan" class="form-control" placeholder="Jenis Pekerjaan">
                    </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="">Status Pernikahan</label>
                        <input type="text" name="statusPernikahan" class="form-control" placeholder="Status Pernikahan">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="">Status Keluarga</label>
                        <input type="text" name="statusKeluarga" class="form-control" placeholder="Status Keluarga">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                        <label for="">Kewarganegaraan</label>
                        <input type="text" name="kewarganegaraan" class="form-control" placeholder="Kewarganegaraan">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                        <label for="">Pasport</label>
                        <input type="text" name="pasport" class="form-control" placeholder="pasport">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                        <label for="">kitap</label>
                        <input type="text" name="kitap" class="form-control" placeholder="kitap">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="">Ayah</label>
                        <input type="text" name="ayah" class="form-control" placeholder="Nama Ayah...">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="">Ibu</label>
                        <input type="text" name="ibu" class="form-control" placeholder="Nama Ibu...">
                        </div>
                    </div>
                </div>
            </div>
        </div>';

        return $row;
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
