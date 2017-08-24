@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection

@section('contentheader_title', 'Tambah Kartu Keluarga')

@section('main-content')

<div class="row">
    <div class="col-md-12">
        <div class="box box-success">
            <div class="box-header">FORM KARTU KELUARGA</div>
                <div class="box-body" id="box">
                    <div class="box-body">
                        <form id="formCreate" onsubmit="saveData()" action="{{url('/admin/warga/add/one')}}" method="post">                
                                <div class="row" id="content">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                                <label for="">No KK</label>
                                                <input type="text" name="no_kk" class="form-control" onkeypress='return event.charCode >= 48 && event.charCode <= 57'  required="" placeholder="No KK..." autofocus>
                                        </div>
                                        <div class="form-group">
                                                <label for="">Kepala Keluarga</label>
                                                <input type="text" name="kepala_keluarga" class="form-control" placeholder="Kepala Keluarga..." id="nama">
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">RT</label>   
                                                        <select name="rt" id="" class="form-control"  required="">
                                                            <option selected>Pilih Rt..</option>
                                                            @for($i=1; $i <= 10; $i++)
                                                                <option value="{{ $i }}">{{ $i }}</option>
                                                            @endfor
                                                        </select>    
                                                </div>  

                                                <div class="form-group">
                                                    <label>Desa/Kelurahan</label>
                                                    <input type="text" name="desa_kelurahan" class="form-control"  required="" placeholder="Desa/Kelurahan...">
                                                </div>   

                                                <div class="form-group">
                                                    <label>Kecamatan</label>
                                                    <input type="text" name="kecamatan" class="form-control"  required="" placeholder="Kecamatan...">
                                                </div>          

                                                <div class="form-group">
                                                    <label>Kabupaten/Kota</label>
                                                    <input type="text" name="kabupaten_kota" class="form-control"  required="" placeholder="Kabupaten/Kota">
                                                </div>                                    
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">RW</label>
                                                        <select name="rw" id="" class="form-control"  required="">
                                                            <option selected>Pilih Rw..</option>
                                                            @for($i=1; $i <= 10; $i++)
                                                                <option value="{{ $i }}">{{ $i }}</option>
                                                            @endfor
                                                        </select>                                                    
                                                </div>

                                                <div class="form-group">
                                                    <label>Provinsi</label>
                                                    <input type="text" name="provinsi" class="form-control" required="" placeholder="Provinsi...">
                                                </div>   

                                                <div class="form-group">
                                                    <label>Kode Pos</label>
                                                    <input type="text" name="kodepos" class="form-control"  onkeypress='return event.charCode >= 48 && event.charCode <= 57' required="" placeholder="Kodepos...">
                                                </div>      

                                                <div class="form-group">
                                                    <label>Dikeluarkan Tanggal</label>
                                                    <input type="date" name="keluarTanggal" class="form-control"  required="">
                                                </div>                                                
                                            </div>                                           
                                        </div>

                                        <div class="form-group">
                                                <label for="">Alamat</label>
                                                <textarea name="alamat" class="form-control"  required="" placeholder="Alamat..."></textarea>
                                        </div>
                                    </div>
                                                                           

                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label for="">Nama Anggota</label>
                                                <input type="text" name="nama" class="form-control" placeholder="Nama..." id="nama">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label for="">Nik Anggota</label>
                                                <input type="text" name="nik" class="form-control" placeholder="Nik..." onkeypress='return event.charCode >= 48 && event.charCode <= 57' id="nik">
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
                                                <input type="radio" name="jk" value="laki-laki" checked>
                                                    Laki-Laki
                                                </label>
                                                &nbsp;&nbsp;&nbsp;
                                                <label>
                                                <input type="radio" name="jk" value="perempuan">
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
                                                <label for="">Kitab</label>
                                                <input type="text" name="kitap" class="form-control" placeholder="kitab">
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
                                </div>    
                               <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input type="submit" value="Simpan Data" class="btn btn-success btn-block btn-md" id="submit">
                        </form>
                        {{--  end-box-body-first  --}}
                    </div>
                </div>
        </div>
    </div>
</div>
@stop